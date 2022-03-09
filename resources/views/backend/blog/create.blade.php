<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Create New Blog</h2>
<form action="{{route('blog.store')}}" method="POST">
    @csrf
    <input type="text" name="author" placeholder="Author"><br>
    <input type="text" name="name" placeholder="Title"><br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="content..."></textarea><br>
    <button>Create</button>
</form>
</body>
</html>
