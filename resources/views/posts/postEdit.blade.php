<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreatePost</title>
</head>
<body>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

@foreach($adminPosts as $adminPost)
<form  action="{{route('Post.update', ['Post'=> $adminPost->id])}}" method="POST">
    @method('PUT')
    @csrf
    <div>
    <h2  >Titles of first page {{$adminPost->id}}</h2>
    <label for="first_title">Project photo:  </label>

    <input type="file" id="first_title" name="Create_photo" value="{{ asset('/photos/' .$adminPost->Create_photo) }}" >

    <label for="first_title">  First Title:  </label>
    <input type="text" id="first_title" name="Create_title"  value="{{$adminPost->Create_title}}">

    <label for="first_title">Text</label>
    <textarea name="Create_text" id="first_title" cols="30" rows="10">{{$adminPost->Create_text}}</textarea>

    <label for="first_title">Link</label>
    <input type="text" id="first_title" name="Create_link" value="{{$adminPost->Create_link}}">

    <button type="submit">Edit</button>
    </div>
</form>
@endforeach
</body>
</html>
