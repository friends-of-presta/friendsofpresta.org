<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\User;
use App\Repositories\InscriptionRepository;
use App\Http\Requests\Admin\InscriptionRequest;

class AdminController extends Controller
{
    /**
     * The repository instance.
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * AdminController constructor.
     * @param InscriptionRepository $repository
     */
    public function __construct(InscriptionRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth');
    }

    /**
     * @param InscriptionRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inscriptions(InscriptionRequest $request)
    {
        $inscription = Inscription::orderBy('id', 'desc');
        foreach (array_filter($request->validated()) as $key => $input) {
            $inscription->where($key, 'like', $input.'%');
        }

        return view('admin.inscriptions', [
            'inscriptionlist' => $inscription->paginate(),
            'userlist' => User::orderBy('name')->get(),
            'status' => $this->repository->status,
            'request' => $request,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'inscription' => Inscription::groupBy('status')->selectRaw('count(*) as total, status')->where('status', '<>', 'abandonné')->pluck('total', 'status')->all()
        ]);
    }
}
