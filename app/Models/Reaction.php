<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Reaction extends Model
{
    /** @use HasFactory<\Database\Factories\ReactionFactory> */
    use HasFactory;

    public function post():belongsTo{
        return $this->belongsTo(Post::class);
    }
    public function user():belongsTo{
        return $this->belongsTo(User::class);
    }
    public function reaction_type():belongsTo{
        return $this->belongsTo(ReactionType::class);
    }
}
