<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerAppModel extends Model
{
    use HasFactory;
    protected $fillable = [ 'id' , 'first_title', 'second_title', 'slot', 'first_title_education', 'first_text_education'
    , 'technologies_title', 'technologies_1', 'technologies_2', 'technologies_3', 'technologies_4', 'technologies_5', 'technologies_6',
        'technologies_7', 'technologies_8', 'technologies_9', 'technologies_10', 'title_skills_1',
        'title_skills_2',
        'title_skills_3',
        'title_skills_4',
        'title_skills_5',
        'title_skills_6',
        'title_skills_7',
        'title_skills_8',
        'title_skills_9',
        'title_skills_10',
        'title_skills_11',
        'title_skills_12',
        'title_skills_13',
        'title_skills_14',
        'title_skills_15',
        'title_skills_16',
        'title_skills_17',
        ];
}
