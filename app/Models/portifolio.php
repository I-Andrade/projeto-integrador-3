<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portifolio extends Model
{
    use HasFactory;
    protected $table = 'portifolios';
    protected $fillable = ['title', 'category', 'image',  'description'];
}
