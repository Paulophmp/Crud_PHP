<?php

namespace App\Policies;

use App\meuModel;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Politica
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function autorizacao(User $user, meuModel $teste)
    {
//        $gate->define('autorizacao', function (User $user, meuModel $teste){

            return $user->id == $teste->user_id;
    }
}
