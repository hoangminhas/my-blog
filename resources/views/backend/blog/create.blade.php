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
    <select name="category_id" id="select">
        <option value="#" disabled selected>--Choose Category--</option>
        <option value="1">Society</option>
        <option value="2">Politics</option>
        <option value="3">Self Development</option>
        <option value="4">Music</option>
    </select><br>
    <button>Create</button>
    <button type="button"><a href="{{route('blog.index')}}">Back</a></button>
</form>
</body>
</html>
