<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcaoPresente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'descricao',
        'opcaopresente_id',
        'amigosecreto_id'
    ];
}
