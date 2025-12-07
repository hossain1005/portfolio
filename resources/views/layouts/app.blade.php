<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Rafiya Portfolio')</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6fa;
        }

        /* COLORFUL NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 40px;
            background: linear-gradient(90deg, #ff6a00, #ff8c37);
            color: white;
            box-shadow: 0 3px 12px rgba(0,0,0,0.15);
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: 800;
            color: white;
            letter-spacing: 0.5px;
        }

        .navbar nav a {
            margin-left: 24px;
            text-decoration: none;
            color: white;
            font-size: 15px;
            font-weight: 500;
            transition: 0.25s ease;
        }

        .navbar nav a:hover {
            color: #111;
            background: white;
            padding: 6px 12px;
            border-radius: 6px;
        }

        .navbar nav a.active {
            background: rgba(255,255,255,0.25);
            padding: 6px 12px;
            border-radius: 6px;
        }

        /* MAIN CONTAINER */
        .container {
            max-width: 900px;
            margin: 35px auto;
            padding: 0 20px;
        }

        /* REUSABLE CARD */
        .card {
            background: white;
            padding: 18px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }
    </style>

    @yield('page-style')
</head>

<body>

<header class="navbar">
    <div class="logo">Rafiya</div>

    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer style="text-align:center; padding:16px; color:#777; font-size:13px;">
    © {{ date('Y') }} Rafiya Tasnim Hossain. All rights reserved.
</footer>

</body>
</html>

