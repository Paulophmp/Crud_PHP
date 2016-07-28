<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meuModel extends Model
{
    protected $fillable = [
        'user_id',
        'nome',
        'email',
        'telefone',
        'cidade',
        'estado',
        'endereco',
        'documento'
    ];

    public static $rules = [
        'nome' => 'required',
        'telefone' => 'required',
        'email' => 'required'
    ];
    
    public function user()
    {
		return $this->belongsTo(User::class);
	}
}
