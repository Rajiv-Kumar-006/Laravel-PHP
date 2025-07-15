<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->age < 18) {
            return response(
                '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Access Denied</title>
                    <style>
                        body {
                            font-family: "Segoe UI", Arial, sans-serif;
                            background: linear-gradient(120deg, #e0e0e0 0%, #bdbdbd 100%);
                            min-height: 100vh;
                            margin: 0;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }
                        .card {
                            background: #fff;
                            border-radius: 16px;
                            box-shadow: 0 8px 32px 0 rgba(60,60,60,0.13);
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
                        p {
                            color: #333;
                            font-size: 1.1rem;
                        }
                    </style>
                </head>
                <body>
                    <div class="card">
                        <h1>Access Denied</h1>
                        <p>You are not old enough to access this page.</p>
                    </div>
                </body>
                </html>', 403
            );
        }
        return $next($request);
    }
}
