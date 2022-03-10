<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
<form action="{{route('blog.update', $post->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="author" value="{{$post->author}}"><br>
    <p style="color: red">{{$errors->has('author') ? $errors->first('author') : ""}}</p>
    <input type="text" name="name" value="{{$post->name}}"><br>
    <p style="color: red">{{$errors->has('name') ? $errors->first('name') : ""}}</p>
    <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea><br>
    <p style="color: red">{{$errors->has('content') ? $errors->first('content') : ""}}</p>
    <input id="category_id" type="text" name="category_id" value="{{$post->category->name}}" readonly>
    <button>Update</button>
</form>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("#category_id").attr("value", {{$post->category_id}})
        })
    })
</script>
</body>
</html>
