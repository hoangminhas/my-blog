<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/styleSignup.css">
</head>
<body>
<!-- header section -->
<header>
    <h1 id='title'>Underdog4ever Blog Register</h1>
    <p id='description'>I hope someday you can join us</p>
</header>
<main>
{{--    @if ($errors->any())--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
    <form id='survey-form' action="{{route('signup')}}" method="post">
    @csrf
    <!--     Filling information section -->
        <div class='form-group'>
            <label id='name-label' for="name">Name</label>
            <input id='name' class='input-control1' type="text" name='name' placeholder='John mcCartney'>
            <p style="color: red">{{$errors->has('name') ? $errors->first('name') : ""}}</p>
        </div>
        <div class='form-group'>
            <label id='email-label' for="email">Email</label>
            <input id='email' class='input-control1' type="email" name='email' placeholder='supersaiyan@gmail.com'>
            <p style="color: red">{{$errors->has('email') ? $errors->first('email') : ""}}</p>
        </div>
        <div class='form-group'>
            <label id='number-label' for="password">Password</label>
            <input id="password" class='input-control1' type="password" name='password' min='16' max='35'
                   placeholder='*******'>
            <p style="color: red">{{$errors->has('password') ? $errors->first('password') : ""}}</p>        </div>
        <div class='form-group'>
            <label id='number-label' for="confirmPassword">Confirm Password</label>
            <input id="confirmPassword" class='input-control1' type="password" name='confirmPassword' min='16' max='35'
                   placeholder='*******'>
            <p style="color: red">{{$errors->has('confirmPassword') ? $errors->first('confirmPassword') : ""}}</p>
        </div>
            <div class='form-group'>
                <label for="dropdown">Select Role</label>
                <select id='dropdown' name="role_id" class='input-control1'>
                    <option value="1">Admin</option>
                    <option value="2">Member</option>
                </select>
            </div><br>

    <!-- Selecting section -->
{{--        <div class='form-group'>--}}
{{--            <fieldset>--}}
{{--                <legend>Choose the skill you want to absorb</legend>--}}
{{--                <label for="coding">--}}
{{--                    <input id='coding' type="radio" name='skills-group' value='coding'> Coding--}}
{{--                </label><br>--}}
{{--                <label for="english">--}}
{{--                    <input id='english' type="radio" name='skills-group' value='english'> English--}}
{{--                </label><br>--}}
{{--                <label for="guitar">--}}
{{--                    <input id='guitar' type="radio" name='skills-group' value='guitar'> Guitar--}}
{{--                </label>--}}
{{--            </fieldset>--}}
{{--            <br>--}}
{{--        </div>--}}
{{--        <div class='form-group'>--}}
{{--            <fieldset>--}}
{{--                <legend>What kind of drugs did you take?</legend>--}}
{{--                <label for="lsd">--}}
{{--                    <input id='lsd' type="checkbox" name='drugs-group' value='lsd'> LSD--}}
{{--                </label><br>--}}
{{--                <label for="dmt">--}}
{{--                    <input id='dmt' type="checkbox" name='drugs-group' value='dmt'> DMT--}}
{{--                </label><br>--}}
{{--                <label for="weed">--}}
{{--                    <input id='weed' type="checkbox" name='drugs-group' value='weed'> Weed--}}
{{--                </label><br>--}}
{{--                <label for="mdma">--}}
{{--                    <input id='mdma' type="checkbox" name='drugs-group' value='mdma'> MDMA--}}
{{--                </label><br>--}}
{{--                <label for="shroom">--}}
{{--                    <input id='shroom' type="checkbox" name='drugs-group' value='shroom'> Magic Shroom--}}
{{--                </label><br>--}}
{{--                <label for="others">--}}
{{--                    <input id='others' type="checkbox" name='drugs-group' value='others'> Others--}}
{{--                </label>--}}
{{--            </fieldset>--}}
{{--            <br>--}}
{{--        </div>--}}

        <!-- comment section -->
{{--        <div class='form-group'>--}}
{{--            <label for="comment">Leave your comment here...</label><br>--}}
{{--            <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>--}}
{{--        </div>--}}

        <!-- submit button -->
        <div class='form-group'>
            <button id='submit' type="submit" value='submit'>Submit</button>
            <button type="button"><a style="color: black;text-decoration: none" href="{{route('login')}}">Login</a></button>
        </div>

    </form>
</main>
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Sign Up</h2>--}}
{{--@if ($errors->any())--}}
{{--    <ul>--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <li>{{$error}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endif--}}
{{--<form action="{{route('signup')}}" method="POST">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="username"><br>--}}
{{--    <input type="email" name="email" placeholder="email"><br>--}}
{{--    <input type="password" name="password" placeholder="password"><br>--}}
{{--    <input type="password" name="confirmPassword" placeholder="confirmPassword"><br>--}}
{{--    <button>Sign Up</button>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
