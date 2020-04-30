<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Builder;

class Inscription extends Model
{
    use Filterable, Sortable;

    /**
     * @var array
     */
    public $sortable = ['id', 'societe', 'cp', 'ville', 'created_at'];

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
        'nom', 'prenom', 'telephone', 'email', 'siren', 'societe', 'salaries', 'statut', 'adresse', 'cp', 'ville', 'commentaires', 'url', 'attribution', 'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'string',
    ];

    /**
     * @var int
     */
    protected $perPage = 30;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User', 'attribution');
    }
}
