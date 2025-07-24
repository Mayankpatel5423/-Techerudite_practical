<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }

        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 20px;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .login-form {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #667eea;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #5a67d8;
        }

        .login {
            color: #222222;
        }
         .error-text {
        color: red;
        font-size: 14px;
        margin-top: 4px;
        display: block;
    }
    </style>
</head>

<body>

    <div class="login-container">
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <h2 class="login">Login</h2>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-input" value="{{ old('email') }}">
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-input">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>
