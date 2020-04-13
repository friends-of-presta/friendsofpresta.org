<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\DB;

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

    /**
     * @param int $perPage
     *
     * @return mixed
     */
    public function getStatsES($perPage = 15)
    {
        return DB::table('inscriptions')->select(
            'users.name',
            'users.company',
            DB::raw('COUNT(IF(inscriptions.status="création en cours",inscriptions.id, NULL)) as inprogress'),
            DB::raw('COUNT(IF(inscriptions.status="en ligne",inscriptions.id, NULL)) AS online'),
            DB::raw('COUNT(inscriptions.id) AS total')
        )
            ->join('users', 'users.id', '=', 'inscriptions.attribution')
            ->whereNotIn('inscriptions.status', ['abandonné', 'A attribuer'])
            ->groupBy('users.name', 'users.company')
            ->orderBy('total', 'desc')
            ->paginate($perPage);
    }
}