<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User Form</title>
    <style>
        body {
            font-family: 'Segoe UI', 'Poppins', Arial, sans-serif;
            background: linear-gradient(120deg, #e0e0e0 0%, #bdbdbd 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 40px 0 rgba(60, 60, 60, 0.13);
        }

        .form-container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(253, 160, 133, 0.18);
            padding: 44px 38px 32px 38px;
            width: 430px;
            margin: 0 auto;
            animation: fadeIn 0.7s;
            position: relative;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container h2 {
            margin-bottom: 32px;
            color: #fd7e50;
            text-align: center;
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 1.5px;
        }

        .input-wrapper,
        .checkbox-wrapper,
        .radio-wrapper,
        .select-wrapper,
        .range-wrapper {
            margin-bottom: 24px;
        }

        label {
            font-weight: 600;
            color: #fd7e50;
            margin-bottom: 7px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1.5px solid #ffd6c0;
            border-radius: 10px;
            font-size: 16px;
            background: #fff7f3;
            transition: border-color 0.2s, box-shadow 0.2s;
            margin-top: 4px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #fd7e50;
            box-shadow: 0 0 0 2px #fd7e5033;
            background: #fff;
        }

        .checkbox-wrapper label,
        .radio-wrapper label {
            display: inline-block;
            margin-right: 18px;
            font-weight: 500;
            color: #fd7e50;
            cursor: pointer;
            font-size: 1.01rem;
        }

        .checkbox-wrapper input,
        .radio-wrapper input {
            accent-color: #fd7e50;
            margin-right: 7px;
            transform: scale(1.13);
            cursor: pointer;
        }

        .range-wrapper input[type="range"] {
            width: 100%;
            accent-color: #fd7e50;
            margin-top: 7px;
        }

        .range-wrapper span {
            display: inline-block;
            margin-top: 8px;
            font-weight: bold;
            color: #fd7e50;
            font-size: 1.1em;
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.97em;
            margin-top: 3px;
            display: block;
            min-height: 18px;
        }

        button {
            width: 100%;
            background: linear-gradient(90deg, #fd7e50 0%, #f6d365 100%);
            color: white;
            border: none;
            padding: 15px 0;
            font-size: 1.1rem;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            letter-spacing: 0.7px;
            box-shadow: 0 2px 12px rgba(253, 160, 133, 0.13);
            transition: background 0.2s, transform 0.13s, box-shadow 0.2s;
        }

        .input-error {
            border: 1px solid red;
            background-color: #ffe5e5;
        }

        .text-danger {
            color: red;
            font-size: 13px;
        }

        button:hover {
            background: linear-gradient(90deg, #f6d365 0%, #fd7e50 100%);
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 4px 20px rgba(253, 160, 133, 0.18);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .form-container {
                width: 98vw;
                padding: 18px 4vw;
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
                <input type="text" name="username" id="username" placeholder="Enter your username" value="{{ old('username') }}" class="{{ $errors->has('username') ? 'input-error' : '' }}">
                <span class="error-message"> @error('username')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror</span>
            </div>

            <div class="input-wrapper">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'input-error' : '' }}">
                <span class="error-message"> @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror</span>
            </div>

            <div class="input-wrapper">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" value="{{ old('password') }}" class="{{ $errors->has('password') ? 'input-error' : '' }}">
                <span class="error-message"> @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror</span>
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
                <span class="error-message"> @error('skill')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror</span>
            </div>

            <div class="radio-wrapper">
                <label>Gender :</label>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label>
                <br>
                <span class="error-message"> @error('gender')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror</span>
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
                <span class="error-message"> @error('country')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror</span>
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