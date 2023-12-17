<style>

    .Listsoffooter{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 100px;
        margin-top: 20px;
    }

    .listss {
        text-decoration: none;
        text-line-through: none;
        cursor: pointer;
        margin-right: 25px;
        font-family: "Segoe UI Regular";
        list-style-type: none;
        font-size: 14px;
        color: #232323;
        position: relative;
    }
    .listss:hover {
        color: #EB4432;
        transition: 0.5s;
    }
    .line{
        margin-top: 100px;
        width: 100%;
        background: #EB4432;
        height: 2px;
    }
    .line2{
        margin-top: 20px;
        width: 100%;
        background: #EB4432;
        height: 2px;
    }
    .footerLogo{
        display: flex;
        font-family: "Segoe UI Black";
        color: #EB4432;
        font-size: 30px;
        position: absolute;
        margin-top: 5px;
    }

.icons{
    display: flex;
    justify-content: end;

}
.icons_item{
    margin-right: 15px;
    font-size: 30px;
    margin-top: -25px;
    cursor: pointer;

    border-radius: 5px;
}
    .icons_item:hover{
        background-color:  #EB4432;
        transition: 0.5s;
    }

</style>
<footer class="container footer">
    <div class="container line"></div>
    <div class="footerLogo" href="{{route('home')}}">Jupiter</div>
    <div class="Listsoffooter">
        <a class="listss" href=" {{route('home')}}">Home</a>
        <a class="listss" href="#about">About</a>
        <a class="listss" href="#projects">Projects</a>
        <a class="listss"  href="#certificates">Certificates</a>
    </div>

    <div class="icons">
      <a href="https://github.com/boburasroriy" target="_blank">  <i  class="fa-brands fa-github  icons_item" style="color: #000000;"></i></a>
       <a href="https://www.linkedin.com/in/bobur-asrorov-2a4855240/"  target="_blank" > <i class="fa-brands fa-linkedin icons_item" style="color: #000000;"></i></a>
        <a href="https://t.me/Bobur_Asrorov_full" target="_blank">  <i  class="fa-brands fa-telegram icons_item" style="color: #000000;"></i></a>
        <a href="https://www.instagram.com/asrorov_bobur_full/" target="_blank"><i class="fa-brands fa-instagram icons_item" style="color: #000000;"></i></a>
    </div>
    <div class="line2"></div>

    <script src="https://kit.fontawesome.com/c0d7846991.js" crossorigin="anonymous"></script>

</footer>
