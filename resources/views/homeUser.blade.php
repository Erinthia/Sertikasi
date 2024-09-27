<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile Club Motor User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            font-size: 3em;
            color: #bfb488;
        }

        .sidebar {
            width: 20%;
            background-color: #f8f9fa;
            padding: 20px;
            float: left;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
            color: #333;
        }

        .main-content {
            float: left;
            width: 80%;
            padding: 20px;
        }

        .nav-links {
            display: flex;
            justify-content: space-between;
            background-color: #bfb488;
            padding: 10px;
            text-align: center;
        }

        .nav-links a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            background-color: #f0f0f0;
            color: black;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <h1>CLUB MOTOR VANDALS MEMBER</h1>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="logo.png" alt="Logo" style="width: 100px;">
        <a href="/">Home</a>
        <a href="{{ route('artikel') }}">Artikel</a>
        <a href="{{ route('event') }}">Event</a>
        <a href="{{ route('galleries') }}">Gallery Foto</a>
        <a href="{{ route('klien') }}">Klien Kami</a>
        {{-- <a href="#">Login</a> --}}
        <div style="padding-left: 10px;">
            {{-- <a href="{{ route('login') }}">Sign In</a>
            <a href="{{ route('register') }}">Sign Up</a> --}}
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navigation -->
        <div class="nav-links">
            <a href="{{ route('profiles') }}">Profile</a>
            <a href="{{ route('visimisi') }}">Visi dan Misi</a>
            <a href="{{ route('products') }}">Jasa Kami</a>
            <a href="{{ route('kontak') }}">Kontak Kami</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>
        <div class="center-img">
            <img src="vandals.jpg" alt="Foto Club Motor" style="width: 100%; height: auto;">
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
