<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'ano'];
    public function alunos(){
        return $this->belongsTo(Alunos::class);
    }
}
