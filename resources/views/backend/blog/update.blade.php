<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('blog.update', $post->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="author" value="{{$post->author}}"><br>
    <input type="text" name="name" value="{{$post->name}}"><br>
    <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea><br>
    <button>Update</button>
</form>
</body>
</html>