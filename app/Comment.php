<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->hasOneThrough(User::class, Donation::class, 'user_id', 'id');
    }
}
