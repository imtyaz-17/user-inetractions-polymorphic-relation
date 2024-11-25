<?php

namespace App\Models;

use App\Traits\Interactable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory,Interactable;
    protected $fillable = ['title', 'description'];
//    public function users()
//    {
//        return $this->morphToMany(User::class, 'interactable', 'user_interactions');
//    }
}
