<?php

namespace App\Traits;

trait Role
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'users_roles')->withTimestamps();
    }

    /**
     * @param array $roles
     *
     * @return bool
     */
    public function hasRole(array $roles)
    {
        foreach ($this->roles as $role) {
            if (in_array($role->slug, $roles)) {
                return true;
            }
        }

        return false;
    }
}
