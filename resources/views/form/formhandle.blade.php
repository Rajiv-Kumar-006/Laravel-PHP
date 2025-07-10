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

        .input-wrapper,
        .checkbox-wrapper,
        .radio-wrapper,
        .select-wrapper,
        .range-wrapper {
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #555;
        }

        .input-wrapper label,
        .select-wrapper label,
        .range-wrapper label {
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.1);
        }

        .checkbox-wrapper label,
        .radio-wrapper label {
            margin-right: 15px;
            font-weight: normal;
        }

        .checkbox-wrapper input,
        .radio-wrapper input {
            margin-right: 6px;
            cursor: pointer;
        }

        .range-wrapper input[type="range"] {
            width: 100%;
        }

        .range-wrapper span {
            display: inline-block;
            margin-top: 8px;
            font-weight: bold;
            color: #333;
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

            <div class="checkbox-wrapper">
                <label>Skills :</label>
                <input type="checkbox" name="skill[]" value="HTML" id="h">
                <label for="html">HTML</label>

                <input type="checkbox" name="skill[]" value="PHP" id="php">
                <label for="php">PHP</label>

                <input type="checkbox" name="skill[]" value="JAVASCRIPT" id="javascript">
                <label for="javascript">JAVASCRIPT</label>
            </div>

            <div class="radio-wrapper">
                <label>Gender :</label>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label>
            </div>

            <div class="select-wrapper">
                <label for="country">Country :</label>
                <select name="country" id="country">
                    <option value="">Select Country</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>

            <div class="range-wrapper">
                <label for="age">Age :</label>
                <span id="ageValue">18</span>
                <input type="range" name="age" id="age" min="1" max="100" value="18" oninput="document.getElementById('ageValue').innerText = this.value;">
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