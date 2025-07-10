<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7f8;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .form-container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-container h2 {
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        .input-wrapper {
            margin-bottom: 20px;
        }

        .input-wrapper label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #555;
        }

        .input-wrapper input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .input-wrapper input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0,123,255,0.1);
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New User</h2>
    <form action="{{ url('form') }}" method="POST">
        @csrf
        <div class="input-wrapper">
            <label for="username">UserName :</label>
            <input type="text" name="username" id="username" placeholder="Enter your username">
        </div>
        <div class="input-wrapper">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="input-wrapper">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>





<!-- <div>
    <h2>Add new user</h2>
    <form action="form" method="post">
        @csrf
        <div class="input-wrapper">
            <label for="username">UserName :</label>
            <input type="text" name="username" id="username" placeholder="Enter your username">
        </div>
        <div class="input-wrapper">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="input-wrapper">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <div>
            <button >
                Submit
            </button>
        </div>
    </form>
</div> -->