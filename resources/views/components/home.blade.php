<x-layouts.nav></x-layouts.nav>
<style>
    .MainText{
       margin-top: 140px;
    }
    .name{
        display: flex;
        justify-content: center;
        font-family: "Segoe UI";
        font-weight: bold;
        color: #232323;
        font-size: 90px;
    }
    .nameofProfession{
        display: flex;
        justify-content: center;
        font-size: 45px;
        margin-top: -70px;
        color: #EB4432;
        font-family: "Segoe UI";
        font-weight: bold;

    }
    .description{
        display: flex;
        justify-content: center;
        margin-top: 20px;
        color: #565454;
        font-weight: 400;
        line-height: 28px;
        font-family: "Segoe UI Regular";
        font-size: 18px;
    }
    .buttonofMain{
        display: flex;
        justify-content: center;
        margin-top: 70px;
    }
    .aboutmorebutton{
        font-size: 14px;
        color: white;
        background-color: #EB4432;
        border: solid 1px #EB4432;
        width: 175px;
        height: 36px;
        margin-right: 10px;
        font-family: "Segoe UI";
        font-weight: bold;
    }
    .aboutmorebutton a{
        color: white;
        text-decoration: none;
    }
    .downloadCVbutton{
        font-family: "Segoe UI";
        font-weight: bold;
        font-size: 14px;
        color: #EB4432;
        background-color: white;
        border: solid 1px #EB4432;
        width: 175px;
        height: 36px;
    }
    .downloadCVbutton a{
        color:  #EB4432;
        text-decoration: none;
    }
    .downloadCVbutton:hover {
        background-color:  #EB4432;
        color: white;
        transition: 0.5s;
    }
    .downloadCVbutton:hover a{
        color: white;
        transition: 0.5s;
    }
    .cube2{
        position: absolute;
        margin-right: -1000px;
    }
    .cube{
        position: absolute;
    }
</style>
<main>
    <div class="main">
        <div class="MainText container">
            <div class="cube">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="53" viewBox="0 0 46 53" fill="none">
                    <g clip-path="url(#clip0_183_281)">
                        <path d="M45.202 39.108V13.704L23.102 1L1.00098 13.704V39.108" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M45.202 39.105L23.102 51.807L1 39.105" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M1 13.699L23.1002 26.4022L23.1009 51.8072L1.00076 39.104L1 13.699Z" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M23.102 26.402L45.2022 13.6988L45.2014 39.1038L23.1012 51.807L23.102 26.402Z" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M1 13.702L23.101 1.00012L45.2019 13.702L23.101 26.4039L1 13.702Z" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_183_281">
                            <rect width="46" height="53" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        <h1 class="name">Bobur Asrorov</h1>
        <h2 class="nameofProfession">PHP/Laravel developer</h2>
        </div>
        <div class="description">"Everything is achievable with hard work"</div>

        <div class="buttonofMain">
            <button class="aboutmorebutton"><a  href="{{ route('about') }}"> ABOUT MORE </a></button>
            <button  class="downloadCVbutton"><a href="/images/Bg-images/wiut.jpg" download="wiut.jpg">DOWNLOAD CV</a></button>
            <div class="cube2">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="53" viewBox="0 0 46 53" fill="none">
                    <g clip-path="url(#clip0_183_281)">
                        <path d="M45.202 39.108V13.704L23.102 1L1.00098 13.704V39.108" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M45.202 39.105L23.102 51.807L1 39.105" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M1 13.699L23.1002 26.4022L23.1009 51.8072L1.00076 39.104L1 13.699Z" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M23.102 26.402L45.2022 13.6988L45.2014 39.1038L23.1012 51.807L23.102 26.402Z" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                        <path d="M1 13.702L23.101 1.00012L45.2019 13.702L23.101 26.4039L1 13.702Z" stroke="#EB4432" stroke-width="1.435" stroke-linejoin="bevel"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_183_281">
                            <rect width="46" height="53" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

    </div>

</main>




