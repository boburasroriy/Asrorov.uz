<?php

namespace Database\Seeders;

use App\Models\PostController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostController::create([
            'id'=>1,
            'Create_photo'=>'NO photo',
            'Create_title'=>'Microgold-investment-group',
            'Create_text'=> 'Website for Investment company. Our client was so satisfied with our work. Technologies: CMS (WordPress), Elementor, Plugins. ',
            'Create_link'=> 'https://microgold-investment-group.uz/',
        ]);
    }
}
