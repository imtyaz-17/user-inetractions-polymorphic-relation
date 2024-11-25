<?php

namespace App\Models;

use App\Traits\Interactable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Announcement extends Model
{
    use HasFactory,Interactable;
    protected $fillable = ['title', 'content'];

//    public function users()
//    {
//        return $this->morphedByMany(User::class, 'interactable', 'user_interactions');
//    }
}
