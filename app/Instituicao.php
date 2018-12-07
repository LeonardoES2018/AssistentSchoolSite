<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = ['nomeInstituicao', 'idDisciplina', 'idSala'];
}
