<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
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
        .dashboard-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(60,60,60,0.13);
            padding: 36px 32px;
            min-width: 340px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 28px;
        }
        a {
            display: inline-block;
            margin: 10px 0;
            color: #1976d2;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.08rem;
            transition: color 0.2s;
        }
        a:hover {
            color: #fd7e50;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="dashboard-card">
        <h1>This is Admin Dashboard page.</h1>
        <a href="{{ route('admin.profile') }}">Go to Profile</a>
        <br>
        <a href="{{ route('admin.user') }}">Go to User</a>

        <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    </div>
</body>
</html>
