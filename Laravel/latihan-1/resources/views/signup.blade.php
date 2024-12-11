<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h1>Signup Page</h1>

    @if($errors->any())
        <div style="color:red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div style="color:green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('signup') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required value="{{ old('username') }}"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Signup</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Signin di sini</a></p>
</body>
</html>