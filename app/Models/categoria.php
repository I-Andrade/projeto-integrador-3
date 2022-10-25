<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = ['type', 'description'];

    public function wallpapers()
    {
        return $this->belongsTo('App\Models\Wallpaper');
    }
}
