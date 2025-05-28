<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
{
    use HasFactory;
    
    protected $table = 'persona';

    protected $fillable = [
        'nome',
        'arcana',
        'nivel',
    ];
}
