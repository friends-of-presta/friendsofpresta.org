<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Repositories\UserRepository;
use App\User;

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
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->middleware('auth');

        $this->repository = compact('user');
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
            'top' => $this->repository['user']->getStatsES(3)
        ]);
    }
}
