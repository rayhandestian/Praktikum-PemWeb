<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h1>Signup Page</h1>
    <form action="/signup" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
    
        <button type="submit">Signup</button>
    </form>
</body>
</html>