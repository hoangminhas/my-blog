<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Login</h2>

<form action="{{route('login')}}" method="POST">
    @csrf
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <button>Login</button>
    <button type="button"><a href="{{route('showFormSignup')}}">Sign Up</a></button>
</form>
</body>
</html>
