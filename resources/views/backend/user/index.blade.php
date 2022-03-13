<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/user/styleUser.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #animation{
            animation-name: barz;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            height: 50px;
            width: 50px;
            position: relative;
            top: 0;
            border-radius: 50px;
        }
        @keyframes barz {
            0%{
                background: linear-gradient(35deg, #f0ad4e, #f1b0b7);
                top: 0;
            }
            50%{
                background: linear-gradient(65deg, #3F7F7F, #c2d94c);
                top: 820px;
            }
            100%{
                background: linear-gradient(90deg, #a0cfee, #2aa198);
                top: 0;
            }
        }
    </style>
</head>
<body>
<table cellspacing="0" cellpadding="0" class="user-table">
    <thead>
        <tr id="user-table-top">
            <th>
                <h3>Name</h3>
            </th>
            <th>
                <h3>Email</h3>
            </th>
            <th>
                <h3>Role</h3>
            </th>
            <th>
                <h3>Edit user</h3>
            </th>
            <th>
                <h3>Block user</h3>
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th>
                <h5>{{$user->name}}</h5>
            </th>
            <th>
                <h5>{{$user->email}}</h5>
            </th>
            <th>
                <h5>{{$user->role->name}}</h5>
            </th>
            <th><button><i class="fa fa-edit"></i></button></th>
            <th><button><i class="fa fa-ban" style="color: red"></i></button></th>
        </tr>
    @endforeach
    </tbody>
    <br>
    <div id="animation"></div>
{{--    <tr>--}}
{{--        <th>--}}
{{--            <h5>Hannah West</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>hannah_west@example.com</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Lawyer</h5>--}}
{{--        </th>--}}
{{--        <th><button><i class="fas fa-edit"></i></button></th>--}}
{{--        <th><button><i class="fas fa-user-times"></i></button>--}}
{{--        </th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th>--}}
{{--            <h5>Edward Rios</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Edward@example.com</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Truck Driver</h5>--}}
{{--        </th>--}}
{{--        <th><button><i class="fas fa-edit"></i></button></th>--}}
{{--        <th><button><i class="fas fa-user-times"></i></button>--}}
{{--        </th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th>--}}
{{--            <h5>William Crawford</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>william_86@example.com</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Editor</h5>--}}
{{--        </th>--}}
{{--        <th><button><i class="fas fa-edit"></i></button></th>--}}
{{--        <th><button><i class="fas fa-user-times"></i></button>--}}
{{--        </th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th>--}}
{{--            <h5>Doris Gray</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Doris6@example.com</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Event Planner</h5>--}}
{{--        </th>--}}
{{--        <th><button><i class="fas fa-edit"></i></button></th>--}}
{{--        <th><button><i class="fas fa-user-times"></i></button>--}}
{{--        </th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th>--}}
{{--            <h5>Sharon Richards</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>sharon_91@example.com</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Receptionist</h5>--}}
{{--        </th>--}}
{{--        <th><button><i class="fas fa-edit"></i></button></th>--}}
{{--        <th><button><i class="fas fa-user-times"></i></button>--}}
{{--        </th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th>--}}
{{--            <h5>Andrew Matthews</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>andrew84@example.com</h5>--}}
{{--        </th>--}}
{{--        <th>--}}
{{--            <h5>Dentist</h5>--}}
{{--        </th>--}}
{{--        <th><button><i class="fas fa-edit"></i></button></th>--}}
{{--        <th><button><i class="fas fa-user-times"></i></button>--}}
{{--        </th>--}}
{{--    </tr>--}}
</table>
</body>
</html>
