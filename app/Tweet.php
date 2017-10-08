<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    /**
     * Get the associated user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
