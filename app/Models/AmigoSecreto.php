<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AmigoSecreto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'useradmin_id',
        'data',
        'sorteado',
        'valor_minimo',
        'valor_maximo'
    ];

    public function Admin(){
        return $this->hasOne(User::class, 'user_id', 'useradmin_id');
    }

    public function Users(){
        return $this->belongsToMany(User::class, 'amigo_secreto_usuarios', 'amigosecreto_id');
    }

    public function Chaves(){
        return $this->belongsToMany(ChavesSorteio::class, 'chaves_sorteios', 'amigosecreto_id');
    }

    public function Personagens() {
        return $this->belongsToMany(Personagem::class, "amigo_secreto_personagens", "amigosecreto_id");
    }

    public function OpPresentes() {
        return $this->belongsToMany(OpcaoPresente::class, "amigo_secreto_opcao_presentes", "opcaopresente_id", "amigosecreto_id");
    }
}
