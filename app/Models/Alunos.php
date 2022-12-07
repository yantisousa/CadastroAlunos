<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'dataNasc'];

    public function livro()
    {
        return $this->hasMany(Livros::class, 'id_aluno', 'id'); 
    }
}
