<?php

namespace Database\Seeders;

use App\Models\ManagerAppModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ManagerAppModel::create([
           'id'=>1,
            'first_title'=> 'Bobur Asorov',
            'second_title'=>'PHP/Laravel developer',
            'slot' => 'Everything achievable with hard work',
            'first_title_education'=>'Education',
            'first_text_education'=>'I am an active student of Westminster International University of Tashkent',
            'technologies_title' => 'Technologies',
            'technologies_1' => 'PHP 8.1',
            'technologies_2' => 'Object Oriented Programming (OOP)',
            'technologies_3' => 'Laravel 10',
            'technologies_4' => 'MySQL/SQL',
            'technologies_5' => 'Git (version control system)',
            'technologies_6' => 'JavaScript (basics)',
            'technologies_7' => 'VueJS 3',
            'technologies_8' => 'CMD (Wordpress)',
            'technologies_9' => 'HTML/CSS/Bootstrap',
            'technologies_10' => 'Shopify',

            'title_skills_1'=>'- Experience in Laravel 10.',
        'title_skills_2'=>'- Thorough understanding of OOP (object-oriented programming) principles.',
        'title_skills_3'=>'- Working knowledge of front-end technologies, including HTML5, CSS3, Vue JS.',
        'title_skills_4'=>'- Understanding relational databases such as MySQL.',
        'title_skills_5'=>'- Understanding of version control systems (Git)',
        'title_skills_6'=>'- Proficiency with application software testing (Unit and feature).',
        'title_skills_7'=>'- Ability to optimize applications for speed and scalability.',
        'title_skills_8'=>'- Creating CRM and HRM systems using Birtix24 and amoCRM.',
        'title_skills_9'=>'- Creating webapps using Wordpress.',
        'title_skills_10'=>'- Basic knowledge of JavaScript.',
        'title_skills_11'=>'- Motivated to learn new skills and technologies.',
        'title_skills_12'=>'- Strong Communication and interpersonal skills.',
        'title_skills_13'=>'- Ability to work independently and in a team.',
        'title_skills_14'=>'- Strong critical thinking and problem-solving skills',
        'title_skills_15'=>'- English — Intermediate/B2 (IELTS 6.0)',
        'title_skills_16'=>'- Russian — pre-intermediate/B1',
        'title_skills_17'=>'- Uzbek — Native/C2',
        'title_skills_18'=>'',
        ]);
    }
}
