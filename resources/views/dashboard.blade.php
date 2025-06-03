<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .navbar {
            background-color: #1e3a8a;
            color: white;
            padding: 15px 20px;
            font-size: 18px;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            padding-top: 20px;
            color: white;
            flex-shrink: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .main-content {
            flex: 1;
            padding: 30px;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #1e3a8a;
        }

        .message {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        Contact Us Dashboard
    </div>

    <div class="container">
        <div class="sidebar">
            <a href="#">Home</a>
            <a href="#">Dashboard</a>
            <a href="{{ route('admin.messages') }}">Messages</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; padding: 12px 20px; text-align: left; width: 100%; cursor: pointer;">
                    Logout
                </button>
            </form>
        </div>

        <div class="main-content">
            <div class="card">
                <h2>Dashboard</h2>
                <p class="message">You're logged in!</p>
            </div>
        </div>
    </div>

</body>
</html>
