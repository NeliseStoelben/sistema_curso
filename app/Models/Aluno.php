<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Matricula;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}

?>
