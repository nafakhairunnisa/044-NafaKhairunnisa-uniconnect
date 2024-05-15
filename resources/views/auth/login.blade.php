<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login - UNIConnect</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">NIM:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
