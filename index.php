<?php 
require_once 'koneksi.php'; 
// Nanti kita akan tambahkan logika PHP MVC di sini
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryFactory | Dashboard</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=League+Spartan:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --navy-blue: #1E293B;
            --warm-amber: #F59E0B;
            --light-bg: #FAF7F2;
            --text-dark: #0F172A;
        }

        body {
            font-family: 'League Spartan', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: var(--navy-blue);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            margin: 0;
        }

        .logo span {
            color: var(--warm-amber);
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .welcome-card {
            background-color: white;
            border-left: 5px solid var(--warm-amber);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        .btn {
            background-color: var(--warm-amber);
            color: var(--navy-blue);
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 700;
            border-radius: 5px;
            display: inline-block;
        }

        .btn:hover {
            background-color: #d97706;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <h1 class="logo">Story<span>Factory</span></h1>
        <nav>
            <!-- Navigasi sementara -->
            <a href="#" style="color: white; text-decoration: none;">Logout</a>
        </nav>
    </header>

    <div class="container">
        <div class="welcome-card">
            <h2 style="font-family: 'DM Serif Display', serif;">Welcome, Creator!</h2>
            <p>Let's forge some stories. Kelola proyek novel, karakter, dan lore dunia Anda di sini.</p>
            <br>
            <a href="create_project.php" class="btn">+ Buat Proyek Baru</a>
        </div>
        
        <!-- Nanti kartu daftar novel dari database akan muncul di sini -->
    </div>

</body>
</html>