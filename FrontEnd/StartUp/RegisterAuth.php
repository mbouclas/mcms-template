<?php

namespace FrontEnd\StartUp;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class RegisterAuth
{
    public function handle(GateContract $gate)
    {
        //Globally apply an exception to any policies that have to do with the user
        $gate->before(function ($user){
//            return $user->isAdmin();
        });
    }
}