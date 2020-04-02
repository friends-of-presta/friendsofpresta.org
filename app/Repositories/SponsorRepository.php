<?php

namespace App\Repositories;

use App\Models\Sponsor;

class SponsorRepository
{
    /**
     * All sponsor
     */
    public function all(Sponsor $sponsor = null)
    {
        $sponsorlist = Sponsor::limit(10);
        if ($sponsor) {
            $sponsorlist->where('id', '<>', $sponsor->id);
        }

        return $sponsorlist->get();
    }
}