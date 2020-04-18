<?php
namespace App\Filters;

use EloquentFilter\ModelFilter;

class InscriptionFilter extends ModelFilter
{
    public function societe($value = '')
    {
        return $this->whereLike('societe', $value);
    }

    public function id($value = '')
    {
        return $this->whereBeginsWith('id', $value);
    }

    public function cp($value = '')
    {
        return $this->whereBeginsWith('cp', $value);
    }

    public function attribution($value = '')
    {
        return $this->where('attribution', $value);
    }

    public function status($value = '')
    {
        return $this->where('status', $value);
    }
}