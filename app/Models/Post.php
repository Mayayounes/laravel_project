<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function reactions():hasMany{
        return $this->hasMany(Reaction::class);
    }
    public function comments(): hasMany{
        return $this->hasMany(Comment::class);
    }
    public function post_status(): belongsTo{
        return $this->belongsTo(PostStatus::class);
    }
    public function user(): belongsTo{
        return $this->belongsTo(User::class);
    }
}
