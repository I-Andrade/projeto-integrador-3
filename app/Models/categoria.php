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
        return $this->belongsTo(Wallpaper::class,'id_category');
    }

    public function blogs()
    {
        return $this->belongsTo(Blog::class,'id_category');
    }

}
