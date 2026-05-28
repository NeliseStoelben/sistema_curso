<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';
    protected $fillable = [
        'aluno_id',
        'curso_id',
        'data_matricula',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
