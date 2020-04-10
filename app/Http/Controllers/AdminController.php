<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\User;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
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
            ]
        ]);
    }
}
