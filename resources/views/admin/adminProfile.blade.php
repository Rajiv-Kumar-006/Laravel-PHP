<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #e0e0e0 0%, #bdbdbd 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(60,60,60,0.13);
            padding: 36px 32px;
            min-width: 340px;
            text-align: center;
        }
        h1 {
            color: #1976d2;
            margin-bottom: 28px;
            font-size: 2rem;
            font-weight: 700;
        }
        a {
            display: inline-block;
            margin: 10px 0;
            color: #fd7e50;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.08rem;
            transition: color 0.2s;
        }
        a:hover {
            color: #1976d2;
            text-decoration: underline;
        }
        .quote {
            color: #888;
            font-size: 1rem;
            margin-top: 18px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h1>Admin Profile</h1>
        <a href="{{ route('admin.settings') }}">Go to settings</a>
        <br>
        <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
       
</body>
</html>