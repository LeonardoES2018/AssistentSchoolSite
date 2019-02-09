<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Instituicao extends Model
{
    protected $fillable = ['nomeInstituicao', 'user_id'];

    public function usuario(){
        return $this->hasOne(User::class);
    }

}
