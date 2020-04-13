<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\User;
use Illuminate\Support\Facades\DB;

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
            ],
            'top' => DB::table('inscriptions')->select(
                    'users.name',
                    DB::raw('COUNT(IF(inscriptions.status="création en cours",inscriptions.id, NULL)) as inprogress'),
                    DB::raw('COUNT(IF(inscriptions.status="en ligne",inscriptions.id, NULL)) AS online'),
                    DB::raw('COUNT(inscriptions.id) AS total')
                )
                    ->join('users', 'users.id', '=', 'inscriptions.attribution')
                    ->where('inscriptions.status', '<>', 'abandonné')
                    ->groupBy('users.name')
                    ->orderBy('total', 'desc')
                    ->limit(5)
                    ->get()
        ]);
    }
}
