<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    /**
     * @param string $orderby
     * @return mixed
     */
    public function getExperts($orderby = 'name')
    {
        return User::orderBy($orderby)->whereHas('roles', function($q){
            $q->where('slug', 'expert');
        })->get();
    }
}