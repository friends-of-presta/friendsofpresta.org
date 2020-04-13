<?php
namespace App\Repositories;

use App\Models\Inscription;
use App\Http\Requests\InscriptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionRepository
{
    public $status = [
        'A attribuer' => [
            'color' => 'warning'
        ],
        'création en cours' => [
            'color' => 'info'
        ],
        'en ligne' => [
            'color' => 'success'
        ],
        'abandonné' => [
            'color' => 'dark'
        ]
    ];

    /**
     * Save an inscription
     *
     * @param InscriptionRequest $request
     * @return bool
     */
    public function save(InscriptionRequest $request)
    {
        $inscription = isset($request->inscription) ? $request->inscription : new Inscription();
        $validated = $request->validated();

        // Insert inscription in DB
        $inscription->fill($validated)->save();

        // Send email notification
        Mail::send('emails.notif', ['validated' => $validated], function($message) use ($validated) {
            $message
                ->to('contact@ecommerce-solidaire.fr', 'Ecommerce Solidaire')
                ->subject("Contact via le mini-site Ecommercesolidaire");
        });

        // Send email Welcome
        Mail::send('emails.welcome', [], function($message) use ($validated) {
            $message
                ->to($validated['email'], $validated['prenom'] . ' ' . $validated['nom'])
                ->subject("Bienvenue dans l'initiative e-commerce solidaire");
        });

        return true;
    }

    /**
     * Set an attribution
     *
     * @param Request $request
     * @param Inscription $inscription
     * @return bool
     */
    public function attribution(Request $request, Inscription $inscription)
    {
        $validated = $request->validate([
            'attribution' => 'required|exists:users,id'
        ]);

        $validated['status'] = 'création en cours';

         // Insert inscription in DB
        $inscription->fill($validated)->save();

        return true;
    }

    /**
     * Change status
     *
     * @param Inscription $inscription
     * @param string $status
     *
     * @return bool
     */
    public function status(Inscription $inscription, $status)
    {
        // Insert inscription in DB
        $inscription->status = $status;
        $inscription->save();

        return true;
    }

    /**
     * All inscription
     */
    public function all(Inscription $inscription = null)
    {
        $inscriptionlist = Inscription::limit(10);
        if ($inscription) {
            $inscriptionlist->where('id', '<>', $inscription->id);
        }

        return $inscriptionlist->get();
    }
}