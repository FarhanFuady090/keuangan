<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="username" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <input type="radio" id="role" name="role" value="admin">
                <label for="admin">ADMIN</label>
                <input type="radio" id="role" name="role" value="tupusat">
                <label for="tupusat">TU PUSAT</label>
                <input type="radio" id="role" name="role" value="tuunit">
                <label for="tuunit">TU UNIT</label>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
