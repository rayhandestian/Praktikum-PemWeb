<!DOCTYPE html>
<html>
<head>
    <title>Signin</title>
</head>
<body>
    <h1>Signin Page</h1>

    @if(session('error'))
        <div style="color:red;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color:green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Signin</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('signup.form') }}">Signup di sini</a></p>
</body>
</html>