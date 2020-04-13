<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    /**
     * @return mixed
     */
    public function getExperts()
    {
        return User::orderBy('id')->whereHas('roles', function($q){
            $q->where('slug', 'expert');
        })->get();
    }
}