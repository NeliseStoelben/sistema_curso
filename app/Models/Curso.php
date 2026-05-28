<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Matricula;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nome'
    ];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}

?> 