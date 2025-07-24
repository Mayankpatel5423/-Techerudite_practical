<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminRegistration</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f4f6f8;
}

.form-title {
    text-align: center;
    color: #333;
    margin-bottom: 25px;
    font-size: 24px;
}

.form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

.form-group {
    margin-bottom: 18px;
}

.form-label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #444;
}

.form-input {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
    transition: border 0.3s ease;
}

.form-input:focus {
    border-color: #5c9ded;
    outline: none;
    box-shadow: 0 0 0 2px rgba(92, 157, 237, 0.2);
}

.submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #2575fc;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
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
    <form action="{{ route('adminRegistration') }}" method="POST" class="form-container">
    @csrf
    <h2 class="form-title">Admin Registration</h2>

    <div class="form-group">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-input" value="{{ old('first_name') }}">
        @error('first_name')
            <span class="error-text">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-input" value="{{ old('last_name') }}">
        @error('last_name')
            <span class="error-text">{{ $message }}</span>
        @enderror
    </div>

    <input type="hidden" name="role" value="admin">

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
        <button type="submit" class="submit-btn">Register as Admin</button>
    </div>
</form>


</body>

</html>
