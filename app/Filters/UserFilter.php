<?php
namespace App\Filters;

use EloquentFilter\ModelFilter;

class UserFilter extends ModelFilter
{
    public function name($value = '')
    {
        return $this->whereBeginsWith('name', $value);
    }

    public function company($value = '')
    {
        return $this->whereBeginsWith('company', $value);
    }

    public function department($value = '')
    {
        return $this->whereBeginsWith('department', $value);
    }

    public function city($value = '')
    {
        return $this->whereBeginsWith('city', $value);
    }
}