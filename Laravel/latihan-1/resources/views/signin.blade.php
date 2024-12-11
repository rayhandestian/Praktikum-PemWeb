<!DOCTYPE html>
<html>
<head>
    <title>Signin</title>
</head>
<body>
    <h1>Signin Page</h1>
    <form action="/signin" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
    
        <button type="submit">Signin</button>
    </form>
</body>
</html>