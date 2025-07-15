<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin User</title>
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

        .user-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(60, 60, 60, 0.13);
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
    @php
    $queryString = http_build_query(request()->query());
    @endphp
    <div class="user-card">
        <h1>This is Admin User Page.</h1>
        <a href="{{ route('admin.dashboard') }}? {{$queryString }}">Back to Dashboard</a>
    </div>
</body>

</html>