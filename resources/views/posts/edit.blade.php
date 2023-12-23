<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
@foreach($posts as $post)
<form action="{{route('ManagerApplication.update', ['ManagerApplication'=> $post->id])}}" method="POST">
    @method("PUT")
    @csrf
    <h2>Titles of first page</h2>
    <label for="first_title">First Title:  </label>
    <input type="text" id="first_title" name="first_title" value="{{$post->first_title}}">

    <label for="second_title">Second Title:</label>
    <input type="text" id="second_title" name="second_title" value="{{$post->second_title}}" >

    <label for="slot">Slot:</label>
    <textarea  style="width: 100%; font-family: 'Segoe UI Regular'" type="text" name="slot" id="slot"> {{$post->slot}}</textarea>

    <h3>Education section edit</h3>
    <label for="first_title">Education Title:  </label>
    <input type="text" id="first_title" name="first_title_education" value="{{$post->first_title_education}}">

    <label for="slot">Education text</label>
    <textarea  style="width: 100%; font-family: 'Segoe UI Regular'" type="text" name="first_text_education" id="slot"> {{$post->first_text_education}}</textarea>


    <h3>Technologies Section Edit</h3>
    <label for="first_title">Technologies Title:  </label>
    <input type="text" id="first_title" name="technologies_title" value="{{$post->technologies_title}}">
    <div>
        <ul>
            <input type="text"  name=" technologies_1"  style="width: 100px" value="{{$post->technologies_1}}">
            <input type="text"  name="technologies_2" style="width: 100px" value="{{$post->technologies_2}}">
            <input type="text" name="technologies_3" style="width: 100px" value="{{$post->technologies_3}}">
            <input type="text" name="technologies_4" style="width: 100px" value="{{$post->technologies_4}}">
            <input type="text" name="technologies_5" style="width: 100px" value="{{$post->technologies_5}}">

        </ul>
    </div>
    <div>
        <ul>
            <input type="text" name="technologies_6" style="width: 100px" value="{{$post->technologies_6}}">
            <input type="text"  name="technologies_7" style="width: 100px" value="{{$post->technologies_7}}">
            <input type="text"  name="technologies_8" style="width: 100px" value="{{$post->technologies_8}}">
            <input type="text" name="technologies_9" style="width: 100px" value="{{$post->technologies_9}}">
            <input type="text" name="technologies_10"  style="width: 100px" value="{{$post->technologies_10}}">
        </ul>
    </div>
    <h3>Skills and abilities:</h3>
    <label for="title_skills">skills title</label>
    <div>
        <h3>Hard skills</h3>
    <textarea name="title_skills_1" id="" cols="38" rows="1">  {{$post->title_skills_1}}</textarea>
    <textarea name="title_skills_2" id="" cols="38" rows="1">{{$post->title_skills_2}}</textarea>
    <textarea name="title_skills_3" id="" cols="38" rows="1">{{$post->title_skills_3}}</textarea>
    <textarea name="title_skills_4" id="" cols="38" rows="1">{{$post->title_skills_4}}</textarea>
    <textarea name="title_skills_5" id="" cols="38" rows="1">{{$post->title_skills_5}}</textarea>
    <textarea name="title_skills_6" id="" cols="38" rows="1">{{$post->title_skills_6}}</textarea>
    <textarea name="title_skills_7" id="" cols="38" rows="1">{{$post->title_skills_7}}</textarea>
        <textarea name="title_skills_8" id="" cols="38" rows="1">{{$post->title_skills_8}}</textarea>
        <textarea name="title_skills_9" id="" cols="38" rows="1">{{$post->title_skills_9}}</textarea>
        <textarea name="title_skills_10" id="" cols="38" rows="1">{{$post->title_skills_10}}</textarea>
    </div>
    <div>
        <h3>soft skills</h3>
        <textarea name="title_skills_11" id="" cols="38" rows="1">{{$post->title_skills_11}}</textarea>
        <textarea name="title_skills_12" id="" cols="38" rows="1">{{$post->title_skills_12}}</textarea>
        <textarea name="title_skills_13" id="" cols="38" rows="1">{{$post->title_skills_13}}</textarea>
        <textarea name="title_skills_14" id="" cols="38" rows="1">{{$post->title_skills_14}}</textarea>

    </div>
    <div >
        <h3>Languaage skills</h3>
        <textarea name="title_skills_15" id="" cols="38" rows="1">{{$post->title_skills_15}}</textarea>
        <textarea name="title_skills_16" id="" cols="38" rows="1">{{$post->title_skills_16}}</textarea>
        <textarea name="title_skills_17" id="" cols="38" rows="1">{{$post->title_skills_17}}</textarea>
        <textarea name="title_skills_18" id="" cols="38" rows="1">{{$post->title_skills_18}}</textarea>
    </div>





    <button type="submit">edit</button>
    @endforeach
</form>
</body>
</html>
