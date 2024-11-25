<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Interactable
{
    public function users():MorphToMany
    {
        return $this->morphToMany(User::class,'interactable', 'user_interactions')
            ->withTimestamps();
    }
}
