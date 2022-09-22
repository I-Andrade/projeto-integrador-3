<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallpaper extends Model
{
    use HasFactory;
    protected $table = 'wallpapers';
    protected $fillable = ['name', 'image', 'category', 'author', 'description'];
}
