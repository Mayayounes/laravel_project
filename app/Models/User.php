<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected function casts(){
        return[
            'password' => 'hashed'
        ];
    }

    public function reactions(): HasMany{ 
        return $this->hasMany(Reaction::class);
    }
    public function posts(): HasMany{
        return $this-> hasMany(Post::class);
    }
    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }
    public function replies() : hasMany{
        return $this->hasMany(Reply::class);
    }
}
