<?php

namespace App\Http\Controllers\API;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all()->map(function ($profile) {
            if ($profile->profile_image) {
                $profile->profile_image = asset('storage/' . $profile->profile_image);
            }
            return $profile;
        });
    
        return response()->json($profiles);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|integer',
            'location' => 'required',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('profiles', 'public');
        }

        $profile = Profile::create($data);

        return response()->json($profile, 201); 
    }

    public function show(Profile $profile)
    {
        return response()->json($profile);
    }

    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'first_name' => 'sometimes|required|string',
            'last_name' => 'sometimes|required|string',
            'age' => 'sometimes|required|integer',
            'location' => 'sometimes|required|string',
            'profile_image' => 'nullable|image|max:2048',
        ]);
    
        if ($request->hasFile('profile_image')) {
            if ($profile->profile_image) {
                Storage::disk('public')->delete($profile->profile_image);
            }
    
            $data['profile_image'] = $request->file('profile_image')->store('profiles', 'public');
        }
    
        $profile->update($data);
    
        if ($profile->profile_image) {
            $profile->profile_image = asset('storage/' . $profile->profile_image);
        }
    
        return response()->json($profile);
    }
    

    public function destroy(Profile $profile)
    {
        Storage::disk('public')->delete($profile->profile_image);
        $profile->delete();

        return response()->json(['message' => 'Profile deleted successfully.'], 200);
    }
}
