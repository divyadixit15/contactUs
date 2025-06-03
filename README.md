## Project Features Summary
1: Fields: name, email, subject, message
2: Saves to DB
3: Shows success message

##  Admin Panel
1: Auth-protected dashboard
2: View messages in table
3: Filter by email, date range
4: "View" button to see full message

##  Profile Management (API CRUD)
1: Fields: first_name, last_name, age, location, profile_image
2: Full API CRUD with image upload
3: JSON responses only

### Access Control:
- Only authenticated admins can access

### Operations:
| Method | Endpoint           | Description              |
|--------|--------------------|--------------------------|
| GET    | /api/profiles      | List all profiles        |
| POST   | /api/profiles      | Create a new profile     |
| GET    | /api/profiles/{id} | View profile by ID       |
| PUT    | /api/profiles/{id} | Update profile by ID     |
| DELETE | /api/profiles/{id} | Delete profile by ID     |

### Notes:
- Returns JSON responses only
- Profile images stored in `public/storage/profiles`
- Image URL returned as full path via accessor

app/
├── Http/
│ ├── Controllers/
│ │ ├── ContactController.php
│ │ └── Auth/
│ │ └── AuthenticatedSessionController.php
│ │ └── API/
│ │ └── ProfileController.php
routes/
├── web.php // Frontend + Admin routes
├── api.php // API routes for profiles
resources/views/
├── contact.blade.php
├── admin/messages/index.blade.php
├── admin/messages/show.blade.php

## 🛡 Authentication

- Admin panel is protected by Laravel's built-in auth middleware.
- Public contact form is accessible without login.

## 🛠 Setup Instructions

1. Clone the repo:
   ```bash
   git clone https://github.com/divyadixit15/contactUs.git
   
2. Install dependencies:
    composer install
    npm install && npm run dev

3. Create .env file:
   php artisan key:generate

4. Set up database:
  Configure .env with DB credentials
  Run migrations: php artisan migrate

4. Create storage link: php artisan storage:link

5. Start development server: php artisan serve
   