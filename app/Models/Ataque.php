<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ataque extends Model
{
    use HasFactory;
    
    protected $table = 'ataque';

    protected $fillable = [
        'nome',
        'tipo',
        'dano',
    ];
}
