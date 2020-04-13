<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\InscriptionRequest;
use App\Repositories\InscriptionRepository;
use App\Repositories\UserRepository;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class EcommercesolidaireController extends Controller
{
    /**
     * The repository instances.
     *
     * @var array
     */
    protected $repository = array();

    /**
     * EcommercesolidaireController constructor.
     *
     * @param InscriptionRepository $inscription
     * @param UserRepository $user
     */
    public function __construct(InscriptionRepository $inscription, UserRepository $user)
    {
        $this->repository = compact('inscription', 'user');
    }

    public function index()
    {
        return view('pages/ecommerce-solidaire/index', [
            'sponsorlist' => Sponsor::get(),
            'volonteerlist' => $this->repository['user']->getExperts()
        ]);
    }

    public function legals()
    {
        return view('pages/ecommerce-solidaire/legals');
    }

    public function print(Request $request)
    {
        return view('pages/ecommerce-solidaire/print', ['url' => $request->input('url')]);
    }

    public function inscriptions()
    {
        return view('pages/ecommerce-solidaire/inscriptions', [
            'inscriptionlist' => $this->repository['inscription']->getOnline()
        ]);
    }

    public function inscription(InscriptionRequest $request)
    {
        $this->repository['inscription']->save($request);
    }
}
