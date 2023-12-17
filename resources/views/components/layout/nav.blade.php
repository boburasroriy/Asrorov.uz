<?php
$title = 'Asrorov.uz';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title = isset($title) ? $title : 'Asrorov' }}</title>
</head>
<link rel="icon" type="image/x-icon" href="/images/icons/jupiter.png">

<body>
<style>
    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .container{
        margin: auto;
        width: 1180px;
    }
    .Ul{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 100px;
        margin-top: 20px;
    }
    .lists {

        text-decoration: none;
        text-line-through: none;
        cursor: pointer;
        margin-right: 25px;
        font-family: "Segoe UI Regular";
        list-style-type: none;
        font-size: 16px;
        color: #232323;
        position: relative;

    }
    .lists:hover {
        color: #EB4432;
        transition: 0.5s;
    }
    .ContactButton{
        margin-top: 15px;
        font-family: 'Segoe UI ';
        font-weight: bold;
        color: #EB4432;
        width: 140px;
        height: 38px;
        background-color: white;
        border: solid 1px #EB4432;
        font-size: 14px;

    }
    .ContactButton a{
        text-decoration: none;
        color: #EB4432;
        margin-left: auto;
        margin-right: auto;

    }
    .ContactButton:hover{
        background-color: #EB4432;
        color: white;
        transition: 0.5s;
    }
    .ContactButton:hover a{
        color: white;
        transition: 0.5s;
    }
    .logo{
        font-family: "Segoe UI Black";
        color: #EB4432;
        font-size: 30px;

    }
    .bg-img{
        margin-left: -70px;
        margin-top: -15px;
        width: 640px;
        height: 640px;
        flex-shrink: 0;
        position: absolute;
        opacity: 0.15;
        transform: rotate(180deg);
        background: radial-gradient( 50% 50% at 70.71% 70.71%, #EB4432 0%, rgba(255, 255, 255, 0.00) 100%);
    }

</style>
<div class="bg-img"></div>
<nav class="container">
    <div class="logo" href="{{route('home')}}">Jupiter</div>
    <div class="Ul">
        <a class="lists" href=" {{route('home')}}">Home</a>
        <a class="lists" href="#about">About</a>
        <a class="lists" href="#projects">Projects</a>
        <a class="lists"  href="#contact">Contact</a>
        <a class="lists"  href="#contact"></a>
    </div>
    <button  class=ContactButton><a href="{{ route('register') }}" class="lists" >Sign In</a></button>
</nav>
<script src="https://kit.fontawesome.com/c0d7846991.js" crossorigin="anonymous"></script>
</body>
</html>
{{ $slot }}
