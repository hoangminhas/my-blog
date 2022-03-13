@extends('backend.layout.master')
@section('title', 'Create Blog')
@section('content')
{{--<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">--}}
{{--    <div class="container px-4 px-lg-5">--}}
{{--        <a class="navbar-brand" href="index.html">Start Bootstrap</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            Menu--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarResponsive">--}}
{{--            <ul class="navbar-nav ms-auto py-4 py-lg-0">--}}
{{--                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<!-- Page Header-->
<header class="masthead" style="background-image: url({{asset('assets/img/about-bg.jpg')}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Create Blog</h1>
                    <span class="subheading">Try to write something good.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="{{route('blog.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="author">Author:</label><br>
                        <input id="author" type="text" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="name">Title:</label><br>
                        <input id="name" type="text" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="content">Content:</label><br>
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select mb-3" name="category_id" id="select ">
                            <option selected>--Choose Category--</option>
                            <option value="1">Society</option>
                            <option value="2">Politics</option>
                            <option value="3">Self Development</option>
                            <option value="4">Music</option>
                        </select>
                    </div>
                    <button class="btn btn-success">Create</button>
                    <button class="btn btn-danger" type="button"><a href="{{route('blog.index')}}">Back</a></button>
                </form>
            </div>
        </div>
    </div>
</main>
{{--    <div class="container px-4 px-lg-5">--}}
{{--        <h2>Create New Blog</h2>--}}
{{--        <form action="{{route('blog.store')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <input type="text" name="author" placeholder="Author"><br>--}}
{{--            <input type="text" name="name" placeholder="Title"><br>--}}
{{--            <textarea name="content" id="" cols="30" rows="10" placeholder="content..."></textarea><br>--}}
{{--            <select name="category_id" id="select">--}}
{{--                <option value="#" disabled selected>--Choose Category--</option>--}}
{{--                <option value="1">Society</option>--}}
{{--                <option value="2">Politics</option>--}}
{{--                <option value="3">Self Development</option>--}}
{{--                <option value="4">Music</option>--}}
{{--            </select><br>--}}
{{--            <button>Create</button>--}}
{{--            <button type="button"><a href="{{route('blog.index')}}">Back</a></button>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection
{{--</body>--}}
{{--</html>--}}
