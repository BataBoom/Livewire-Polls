<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{

        // Relationship With Polls
    public function polls() {
        return $this->hasMany(Poll::class, 'owner_id');
    }

        // Relationship With Votes
    public function votes() {
        return $this->hasMany(Vote::class, 'user_id');
    }

    

}

   
