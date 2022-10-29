<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramApi extends Model
{
    use HasFactory;
    protected $table = 'instagram_api';
    protected $fillable = ['client_id', 'client_secret', 'redirect_uri', 'user_id', 'username','access_token'];
}
