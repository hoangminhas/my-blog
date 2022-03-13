<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
    <p style="color: red">{{\Illuminate\Support\Facades\Session::has('login-fail') ? \Illuminate\Support\Facades\Session::get('login-fail') : ""}}</p>
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        <button type="button" class="btn btn-primary btn-block btn-large"><a style="color: white; text-decoration: none" href="{{route('showFormSignup')}}">Sign Up</a></button>
        <button type="button" class="btn btn-primary btn-block btn-large"><a style="color: white; text-decoration: none" href="{{route('google.auth')}}">Login with Google</a></button>
    </form>
</div>
{{--<h2>Login</h2>--}}

{{--<form action="{{route('login')}}" method="POST">--}}
{{--    @csrf--}}
{{--    <input type="text" name="email" placeholder="email"><br>--}}
{{--    <input type="password" name="password" placeholder="password"><br>--}}
{{--    <button>Login</button>--}}
{{--    <button type="button"><a href="{{route('showFormSignup')}}">Sign Up</a></button>--}}
{{--</form>--}}
</body>
</html>
