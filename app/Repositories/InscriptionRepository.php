<?php
namespace App\Repositories;

use App\Models\Inscription;
use App\Http\Requests\InscriptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionRepository
{
    public static $status = [
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

    public static function getStatus()
    {
        return self::$status;
    }

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
     * Update an inscription
     *
     * @param InscriptionRequest $request
     * @param Inscription $inscription
     * @return bool
     */
    public function update(InscriptionRequest $request, Inscription $inscription)
    {
        $inscription->fill($request->validated())->save();

        return true;
    }



    /**
     * @return mixed
     */
    public function getOnline()
    {
        return Inscription::where('status', 'en ligne')->orderBy('cp')->get();
    }
}