<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'alamat',
        'telp',
        'whatsapp',
        'lokasi',
        'email',
        'img_light',
        'img_dark'
    ];
}
