<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajakan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_mini',
        'judul_heading',
        'deskripsi',
        'bg',
        ];
}
