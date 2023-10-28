<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $table = "postagens";

    protected $fillabel = [
        'titulo','autor_id','categoria','foto','descricao_artigo'
    ];

    public function autor()
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

}
