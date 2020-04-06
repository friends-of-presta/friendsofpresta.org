<?php

namespace App\Http\Controllers;

use App\Models\Inscription;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inscriptions()
    {
        return view('admin.inscriptions', ['inscriptionlist' => Inscription::orderBy('id', 'desc')->paginate()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', ['inscriptiontotal' => Inscription::count()]);
    }
}
