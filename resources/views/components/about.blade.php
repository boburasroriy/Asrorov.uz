<?php ?>
<x-layouts.nav></x-layouts.nav>
<style>
    .container{
        width: 1180px;
        margin-left: auto;
        margin-right: auto;
    }
    .EducationSection{
        display: flex;
        justify-content: space-between;
        font-family: 'Segoe UI';
        margin-top: 70px;
    }
    .EducationTitle{
        position: relative;
        cursor: auto;
        font-weight: bold;
        font-size: 48px;
    }
    .EducationText{
        position: relative;
        color: #565454;
        font-size: 16px;
        width: 450px;
        cursor: auto;
    }
    .Wiutbtn{
        margin-top: 50px;
        position: relative;
        cursor: pointer;
        font-family: 'Segoe UI';
        font-weight: bold;
        color: #EB4432;
        width: 140px;
        height: 38px;
        background-color: white;
        border: solid 1px #EB4432;
        font-size: 14px;
    }
    .Wiutbtn:hover{
        background-color:#EB4432 ;
        color: white ;
        transition: 0.5s;
    }
    .imagesWiut{
        width: 633px;
        height: 358px;
        border-radius: 28px;
        margin-top: 30px;
    }

    /*=======================Technologies section=================================*/
    .technologiesSection{
        margin-top: 250px;
    }
    .TechnologiesTitle{
        display: flex;
        justify-content: center;
        color: #232323;
        font-family: 'Segoe UI';
        font-weight: bold;
        font-size: 48px;
        font-style: normal;
        line-height: 48px;
    }
    .technologies_list{
        display: flex;
        justify-content: space-around;
        color: #565454;
        font-family: "Segoe UI Regular";
        font-size: 25px;
        font-style: normal;
    }
    .technologies_list ul li:hover{
        color: #EB4432;
        cursor: pointer;
    }
    /*=======================Features section=================================*/
    .FeaturesSectionContentsAll{
        display: flex;
        justify-content: space-around;
    }
    .FeaturesSectionTitle{
        display: flex;
        justify-content: start;
        margin-top: 200px;
    }
    .titleandsloganOffeaturesSection h4{
        font-family: 'Segoe UI';
        font-weight: bold;
        font-size: 48px;
        display: flex;
        justify-content: center;
    }
    .titleandsloganOffeaturesSection p{
        display: grid;
        align-items: center;
        place-items: center;
        margin-top: -50px;
        font-family: 'Segoe UI Regular';
        font-size: 16px;
    }
    .titleandsloganOffeaturesSection p span{
        display: flex;
        justify-content: center;
    }
    .hardSkillsContent{
        font-family: "Segoe UI Regular";
        font-size: 18px;
    }
    .hardSkillsTitle{
        margin-bottom: 32px;
        font-family: "Segoe UI";
        font-weight: bold;
        font-size: 18px;
    }
    .softSkillsContent{
        font-family: "Segoe UI Regular";
        font-size: 18px;
    }
    .softSkillsContent h5{
        font-family: "Segoe UI";
        font-weight: bold;
    }
    .languageSkillsContent{
        font-family: "Segoe UI Regular";
        font-size: 18px;
    }
    .languageSkillsContent h5{
        font-family: "Segoe UI";
        font-weight: bold;
        margin-top: 80px;
        font-size: 18px;
    }
    ::selection{
        background-color: #EB4432 ;
        color: black;
    }
</style>
<div class="about container">
    <div class="EducationSection">
    <div class="EducationtextContent">
        <h3 class="EducationTitle">Education</h3>
        <p class="EducationText">I am an active student at Westminster International University of Tashkent (WIUT) and i actively engaged in enhancing my communication, leadership, teamwork, and negotiation skills, among others. WIUT provides a supportive environment that encourages personal and professional development, allowing me to thrive and grow.</p>
        <a href="https://www.wiut.uz/"  target="_blank" ><button class="Wiutbtn">WIUT</button></a>
    </div>
    <div class="imagesWiut" >
        <img class="imagesWiut"  src="https://studenthunter.org/images/university/images/1678272914.jpg" alt="wiut">
    </div>
    </div>
    <div class="technologiesSection">
        <h3 class="TechnologiesTitle">Technologies</h3>
        <div class="technologies_list">
            <ul>
                <li>PHP 8.2</li>
                <li>Object-oriented programming (OOP)</li>
                <li>Laravel 10</li>
                <li>MYSQL / SQL</li>
                <li>Git (version control)  </li>
            </ul>
            <ul>
                <li>JavaScript (basics)</li>
                <li>Vue JS</li>
                <li>CMD (Wordpress)</li>
                <li>HTML/CSS/Bootstrap </li>
                <li>Bitrix24/AmoCRM</li>
            </ul>
        </div>

    </div>

        <div class="FeaturesSection container">
            <div class="titleandsloganOffeaturesSection">
                <h4 class="FeaturesSectionTitle">Features</h4>
                <p>Throughout my IT career, I've learned a lot of amazing things. <br> <span>Here's a list of them:</span></p>
            </div>

            <div class="FeaturesSectionContentsAll">
                <div class="hardSkillsContent">
                    <h5 class="hardSkillsTitle">Hard Skills</h5>
                    <p class="hardskillsList">- Experience in Laravel 10.</p>
                    <p class="hardskillsList">- Thorough understanding of OOP (object-oriented programming) principles.</p>
                    <p class="hardskillsList">- Working knowledge of front-end technologies, including HTML5, CSS3, Vue JS.</p>
                    <p class="hardskillsList">- Understanding relational databases such as MySQL.</p>
                    <p class="hardskillsList">- Understanding of version control systems (Git)</p>
                    <p class="hardskillsList">- Proficiency with application software testing (Unit and feature).</p>
                    <p class="hardskillsList">- Ability to optimize applications for speed and scalability.</p>
                    <p class="hardskillsList">- Creating CRM and HRM systems using Birtix24 and amoCRM.</p>
                    <p class="hardskillsList">- Creating webapps using Wordpress.</p>
                    <p class="hardskillsList">- Basic knowledge of JavaScript.</p>
                </div>
                <div class="softSkillsContent">
                    <div>
                    <h5 class="hardSkillsTitle">Soft Skills</h5>
                    <p class="hardskillsList">- Motivated to learn new skills and technologies.</p>
                    <p class="hardskillsList">- Strong Communication and interpersonal skills.</p>
                    <p class="hardskillsList">- Ability to work independently and in a team.</p>
                    <p class="hardskillsList">- Strong critical thinking and problem-solving skills</p>
                    </div>
                    <div class="languageSkillsContent">
                        <h5 class="languageSkillsTitle">Language Skills:</h5>
                        <p class="hardskillsList">- English — Intermediate/B2 (IELTS 6.0)</p>
                        <p class="hardskillsList">- Russian — pre-intermediate/B1</p>
                        <p class="hardskillsList">- Uzbek — Native/C2</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<div>
    <x-layouts.footer></x-layouts.footer>
</div>
