<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index blogs</title>
</head>
<body>
<h2>Underdog Blog</h2>
<a href="{{route('blog.create')}}">Add New Blog</a>
<table>
    <thead>
        <tr>
            <td>STT</td>
            <td>Title</td>
            {{-- <td>Content</td> --}}
            <td>Author</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $key=>$post)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$post->name}}</td>
                {{-- <td>{{$post->content}}</td> --}}
                <td>{{$post->author}}</td>
                <td><a href="{{route('blog.show', $post->id)}}">Detail</a></td>
                <td><a href="{{route('blog.destroy', $post->id)}}">Delete</a></td>
                <td><a href="{{route('blog.edit', $post->id)}}">Update</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
