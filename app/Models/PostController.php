<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostController extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'Create_photo', 'Create_title', 'Create_text', 'Create_link'];

}
