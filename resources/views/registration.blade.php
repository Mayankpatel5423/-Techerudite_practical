<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        background-color: #f4f6f8;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-heading {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
        font-size: 24px;
    }

    .form-wrapper {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 400px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
    }

    .form-input {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-input:focus {
        border-color: #2575fc;
        outline: none;
        box-shadow: 0 0 0 2px rgba(37, 117, 252, 0.2);
    }

    .submit-btn {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        background-color: #2575fc;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #1a5ed6;
    }

    .error-text {
        color: red;
        font-size: 14px;
        margin-top: 4px;
        display: block;
    }
</style>

<body>
    <form action="{{ route('userRegistration') }}" method="POST" class="form-wrapper">
        @csrf
        <h2 class="form-heading">User Registration</h2>

        <div class="form-group">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-input" value="{{ old('first_name') }}">
            @error('first_name')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-input" value="{{ old('last_name') }}">
            @error('last_name')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <input type="hidden" name="role" value="user">

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

        <div class="form-group">
            <button type="submit" class="submit-btn">Register</button>
        </div>
    </form>
</body>


</html>
