<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
