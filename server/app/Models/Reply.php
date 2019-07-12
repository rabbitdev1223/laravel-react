<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public $with = ["creator"];
    public $appends = ["ago"];

    public function creator()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function getAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
