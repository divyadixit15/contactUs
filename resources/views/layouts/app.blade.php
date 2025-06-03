<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        /* Reset */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0; padding: 0;
        }

        body, html {
            height: 100%;
            font-family: 'Figtree', Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            flex-direction: column;
        }

        /* Navbar top */
        .navbar {
            background-color: #1e3a8a;
            color: white;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: 600;
        }

        /* Main container with sidebar and content */
        .container {
            display: flex;
            flex: 1 1 auto;
            min-height: 0; /* Fix flexbox height issues */
            max-width: 1200px;
            margin: 16px auto;
            width: 100%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            padding-top: 20px;
            color: white;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar a, .sidebar form button {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            transition: background 0.3s;
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .sidebar a:hover, .sidebar form button:hover {
            background-color: #34495e;
        }

        /* Main content */
        main {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }

        /* Footer */
        footer {
            background: white;
            border-top: 1px solid #ddd;
            padding: 12px 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-top: auto;
        }

        /* Heading styles inside main */
        main h1, main h2 {
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                margin: 8px;
                border-radius: 0;
                box-shadow: none;
            }
            .sidebar {
                width: 100%;
                flex-direction: row;
                overflow-x: auto;
            }
            .sidebar a, .sidebar form button {
                flex: 1 0 auto;
                padding: 12px 10px;
                font-size: 14px;
                white-space: nowrap;
            }
            main {
                padding: 20px;
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>

    <div class="navbar">
        Contact Us Dashboard
    </div>

    <div class="container">
        <nav class="sidebar" aria-label="Sidebar navigation">
            <a href="#">Home</a>
            <a href="#">Dashboard</a>
            <a href="{{ route('admin.messages') }}">Messages</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" aria-label="Logout">Logout</button>
            </form>
        </nav>

        <main role="main">
            @yield('content')
        </main>
    </div>

    <footer>
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
    </footer>

</body>
</html>
