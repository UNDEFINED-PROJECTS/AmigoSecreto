<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigoSecretoOpcaoPresentes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'amigosecreto_id',
        'opcaopresente_id'
    ];
}
