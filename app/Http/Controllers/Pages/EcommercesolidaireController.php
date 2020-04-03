<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\InscriptionRequest;
use App\Repositories\InscriptionRepository;
use App\Models\Sponsor;
use App\Models\Inscription;
use App\User;
use Illuminate\Http\Request;

class EcommercesolidaireController extends Controller
{
    /**
     * The repository instance.
     */
    protected $repository;

    /**
     * EcommercesolidaireController constructor.
     *
     * @param InscriptionRepository $repository
     */
    public function __construct(InscriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('pages/ecommerce-solidaire/index', ['sponsorlist' => Sponsor::get(), 'volonteerlist' => User::orderBy('id')->get()]);
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
        return view('pages/ecommerce-solidaire/inscriptions', ['inscriptionlist' => Inscription::where('status', 'en ligne')->orderBy('cp')->get()]);
    }

    public function inscription(InscriptionRequest $request)
    {
        $this->repository->save($request);
    }
}
