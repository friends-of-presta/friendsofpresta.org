<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inscription;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InscriptionNotification;
use App\User;
use App\Repositories\InscriptionRepository;
use App\Http\Requests\Filters\InscriptionRequest;
use Illuminate\Http\Request;

class InscriptionController extends Controller
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
        $this->middleware('auth');
        $this->authorizeResource(Inscription::class, 'inscription');

        $this->repository = $repository;
    }

    /**
     * @param InscriptionRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(InscriptionRequest $request)
    {
        $inscription = Inscription::orderBy('id', 'desc');
        foreach (array_filter($request->validated()) as $key => $input) {
            if (in_array($key, ['societe', 'cp']))
                $inscription->where($key, 'like', $input.'%');
            else
                $inscription->where($key,$input);
        }

        return view('admin.inscriptions', [
            'inscriptionlist' => $inscription->paginate(),
            'userlist' => User::orderBy('name')->get(),
            'status' => $this->repository->status,
            'request' => $request,
        ]);
    }

    /**
     * @param Inscription $inscription
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Inscription $inscription)
    {
        $status = $this->repository->status;
        $userlist = User::orderBy('name')->get();

        return view('admin.inscription', compact('inscription', 'status', 'userlist'));
    }

    /**
     * @param Request $request
     * @param Inscription $inscription
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Inscription $inscription)
    {
        $this->repository->attribution($request, $inscription);

        return back();
    }

    /**
     * @param $status
     * @param Inscription $inscription
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateStatus(Inscription $inscription, $status)
    {
        $this->repository->status($inscription, $status);

        return back();
    }

    /**
     * @param Inscription $inscription
     * @return mixed
     */
    public function notif(Inscription $inscription)
    {
        Notification::route('slack', env('SLACK_HOOK'))->notify(new InscriptionNotification($inscription));

        return response()->json([]);
    }
}
