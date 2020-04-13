<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inscription;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InscriptionNotification;
use App\Repositories\UserRepository;
use App\Repositories\InscriptionRepository;
use App\Http\Requests\Filters\InscriptionRequest as Filters;
use App\Http\Requests\InscriptionRequest;

class InscriptionController extends Controller
{
    /**
     * The repository instance.
     *
     * @var array
     */
    protected $repository = array();

    /**
     * InscriptionController constructor.
     *
     * @param InscriptionRepository $inscription
     * @param UserRepository $user
     */
    public function __construct(InscriptionRepository $inscription, UserRepository $user)
    {
        $this->middleware('auth');
        $this->authorizeResource(Inscription::class, 'inscription');

        $this->repository = compact('inscription', 'user');
    }

    /**
     * @param Filters $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Filters $request)
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
            'userlist' => $this->repository['user']->getExperts(),
            'status' => $this->repository['inscription']::getStatus(),
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
        $status = $this->repository['inscription']::getStatus();
        $userlist = $this->repository['user']->getExperts();

        return view('admin.inscription', compact('inscription', 'status', 'userlist'));
    }

    /**
     * @param InscriptionRequest $request
     * @param Inscription $inscription
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(InscriptionRequest $request, Inscription $inscription)
    {
        $this->repository['inscription']->update($request, $inscription);

        return back();
    }

    /**
     * @param Inscription $inscription
     * @return mixed
     */
    public function notif(Inscription $inscription)
    {
        Notification::route('slack', config('notification.slack'))->notify(new InscriptionNotification($inscription));

        return response()->json([]);
    }
}
