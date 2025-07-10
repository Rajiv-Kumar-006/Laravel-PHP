<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            padding: 40px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background 0.5s;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 36px 44px;
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            width: 420px;
            animation: fadeIn 0.7s;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px);}
            to { opacity: 1; transform: translateY(0);}
        }

        .form-container h2 {
            margin-bottom: 28px;
            color: #2d3a4b;
            text-align: center;
            letter-spacing: 1px;
            font-size: 2rem;
        }

        .input-wrapper,
        .checkbox-wrapper,
        .radio-wrapper,
        .select-wrapper,
        .range-wrapper {
            margin-bottom: 22px;
        }

        label {
            font-weight: 600;
            color: #4a5a6a;
        }

        .input-wrapper label,
        .select-wrapper label,
        .range-wrapper label {
            display: block;
            margin-bottom: 7px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #d1d9e6;
            border-radius: 8px;
            font-size: 15px;
            background: #f8fafc;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #5b9df9;
            box-shadow: 0 0 0 2px rgba(91, 157, 249, 0.13);
            background: #f0f7ff;
        }

        .checkbox-wrapper label,
        .radio-wrapper label {
            margin-right: 18px;
            font-weight: normal;
            color: #555;
            cursor: pointer;
        }

        .checkbox-wrapper input,
        .radio-wrapper input {
            margin-right: 7px;
            accent-color: #5b9df9;
            cursor: pointer;
            transform: scale(1.1);
        }

        .range-wrapper input[type="range"] {
            width: 100%;
            accent-color: #5b9df9;
            margin-top: 7px;
        }

        .range-wrapper span {
            display: inline-block;
            margin-top: 8px;
            font-weight: bold;
            color: #2d3a4b;
            font-size: 1.1em;
        }

        button {
            width: 100%;
            background: linear-gradient(90deg, #5b9df9 0%, #3c7fd9 100%);
            color: white;
            border: none;
            padding: 14px;
            font-size: 17px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(91, 157, 249, 0.08);
            transition: background 0.2s, transform 0.1s;
        }

        button:hover {
            background: linear-gradient(90deg, #3c7fd9 0%, #5b9df9 100%);
            transform: translateY(-2px) scale(1.02);
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.97em;
            margin-top: 3px;
            display: block;
            min-height: 18px;
        }

        /* Responsive */
        @media (max-width: 500px) {
            .form-container {
                width: 98vw;
                padding: 18px 6vw;
            }
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
                <span class="error-message">@error("username"){{$message}}@enderror</span>
            </div>

            <div class="input-wrapper">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <span class="error-message">@error("email"){{$message}}@enderror</span>
            </div>

            <div class="input-wrapper">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <span class="error-message">@error("password"){{$message}}@enderror</span>
            </div>

            <div class="checkbox-wrapper">
                <label>Skills :</label>
                <input type="checkbox" name="skill[]" value="HTML" id="html">
                <label for="html">HTML</label>

                <input type="checkbox" name="skill[]" value="PHP" id="php">
                <label for="php">PHP</label>

                <input type="checkbox" name="skill[]" value="JAVASCRIPT" id="javascript">
                <label for="javascript">JAVASCRIPT</label>
                <br>
                <span class="error-message">@error("skill"){{$message}}@enderror</span>
            </div>

            <div class="radio-wrapper">
                <label>Gender :</label>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label>
                <br>
                <span class="error-message">@error("gender"){{$message}}@enderror</span>
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
                <span class="error-message">@error("country"){{$message}}@enderror</span>
            </div>

            <div class="range-wrapper">
                <label for="age">Age :</label>
                <span id="ageValue">18</span>
                <input type="range" name="age" id="age" min="15" max="100" value="18" oninput="document.getElementById('ageValue').innerText = this.value;">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</body>
</html>