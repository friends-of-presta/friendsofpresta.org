<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inscriptions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'email', 'siren', 'societe', 'salaries', 'statut', 'adresse', 'cp', 'ville', 'commentaires', 'slug', 'attribution', 'admin', 'status'
    ];


    /**
     * @var int
     */
    protected $perPage = 30;
}
