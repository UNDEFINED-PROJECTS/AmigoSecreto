<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChavesSorteio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'amigosecreto_id',
        'user_id',
        'to_user_id'
    ];
}
