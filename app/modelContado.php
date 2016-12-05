<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelContado extends Model
{
    protected $fillable = ['nome', 'email', 'descricao'];
}
