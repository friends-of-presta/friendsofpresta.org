<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Repositories\InscriptionRepository;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
    /**
     * The repository instance.
     *
     * @var array
     */
    protected $repository = array();

    /**
     * AdminController constructor.
     *
     * @param InscriptionRepository $user
     */
    public function __construct(InscriptionRepository $inscription)
    {
        $this->middleware('auth');

        $this->repository = compact('inscription');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'inscription' => Inscription::groupBy('status')->selectRaw('count(*) as total, status')->where('status', '<>', 'abandonné')->pluck('total', 'status')->all(),
            'users' => [
                'total' => User::count()
            ],
            'top' => $this->repository['inscription']->getUsersRankings(3),
            'orders' => $this->repository['inscription']->getStatsShops()
        ]);
    }
}
