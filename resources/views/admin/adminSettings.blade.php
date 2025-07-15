<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Settings</title>
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

        .settings-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(60, 60, 60, 0.13);
            padding: 36px 32px;
            min-width: 340px;
            text-align: center;
        }

        h1 {
            color: #fd7e50;
            margin-bottom: 18px;
            font-size: 2rem;
            font-weight: 700;
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
    @php
    $queryString = http_build_query(request()->query());
    @endphp
    <div class="settings-card">
        <h1>This is Admin Setting Page.</h1>
        <a href="{{route('admin.profile')}}? {{$queryString }}">Back to Profile</a>
</body>

</html>