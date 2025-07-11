<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function formSubmit(Request $req)
    {
        // Step 1: Validate inputs
        $req->validate([
            'username' => 'required|string|min:3|max:255 |upperCase',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'skill' => 'required|array|min:1',
            'gender' => 'required|in:male,female',
            'country' => 'required|string',
            'age' => 'required|integer|min:1|max:100',
            // ...add other validations if needed...
        ], [
            'username.required' => 'Username is required.',
            'username.upperCase' => 'Username is must be in upperCase.',
            'username.min' => 'Username must be at least 3 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email already exists.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'skill.required' => 'At least one skill is required.',
        ]);

        $skills = implode(', ', $req->skill);

        $html = <<<HTML
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Form Submission Result</title>
                <style>
                    body {
                        background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
                        font-family: 'Segoe UI', 'Poppins', Arial, sans-serif;
                        min-height: 100vh;
                        margin: 0;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                    .result-card {
                        background: #fff;
                        border-radius: 18px;
                        box-shadow: 0 8px 32px 0 rgba(253, 160, 133, 0.18);
                        padding: 38px 32px 28px 32px;
                        width: 410px;
                        margin: 0 auto;
                        animation: fadeIn 0.7s;
                    }
                    @keyframes fadeIn {
                        from { opacity: 0; transform: translateY(30px);}
                        to { opacity: 1; transform: translateY(0);}
                    }
                    h2 {
                        color: #fd7e50;
                        text-align: center;
                        font-size: 2rem;
                        margin-bottom: 24px;
                        font-weight: 700;
                    }
                    .result-list {
                        list-style: none;
                        padding: 0;
                        margin: 0 0 18px 0;
                    }
                    .result-list li {
                        margin-bottom: 12px;
                        font-size: 1.08rem;
                        color: #444;
                    }
                    .result-label {
                        font-weight: 600;
                        color: #fd7e50;
                    }
                    .skills {
                        background: #fff7f3;
                        border-radius: 8px;
                        padding: 6px 10px;
                        display: inline-block;
                        color: #fd7e50;
                        font-weight: 500;
                    }
                </style>
            </head>
            <body>
                <div class="result-card">
                    <h2>Form Submitted Successfully!</h2>
                    <ul class="result-list">
                        <li><span class="result-label">Name:</span> {$req->username}</li>
                        <li><span class="result-label">Email:</span> {$req->email}</li>
                        <li><span class="result-label">Password:</span> {$req->password}</li>
                        <li><span class="result-label">Gender:</span> {$req->gender}</li>
                        <li><span class="result-label">Country:</span> {$req->country}</li>
                        <li><span class="result-label">Age:</span> {$req->age}</li>
                        <li><span class="result-label">Skills:</span> <span class="skills">{$skills}</span></li>
                    </ul>
                </div>
            </body>
            </html>
        HTML;

        return response($html);
    }
}
