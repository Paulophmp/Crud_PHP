<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meuModel extends Model
{
    protected $fillable = [
        'user_id',
//        'nome',
        'email',
        'telefone',
        'cidade',
        'estado',
        'dataNascimento',
        'endereco',
        'documento'
    ];

    public static $rules = [
//        'nome' => 'required',
//        'telefone' => 'required',
//        'email' => 'required'
    ];
    
    public function user()
    {
		return $this->belongsTo(User::class);
	}

//    /**
//     * Save a new model and return the instance.
//     *
//     * @param  array  $attributes
//     * @return static
//     */
//    public static function create(array $attributes = [])
//    {
//        $attributes['dataNascimento'] = implode("-",array_reverse(explode("/", $attributes['dataNascimento'])));
//
//        $model = new static($attributes);
//
//        $model->save();
//
//        return $model;
//    }
}
