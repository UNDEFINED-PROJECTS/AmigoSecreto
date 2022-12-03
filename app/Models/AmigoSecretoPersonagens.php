<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigoSecretoPersonagens extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'amigosecreto_id',
        'personagem_id',
        'rtk',
        'atribuido'
    ];
}
