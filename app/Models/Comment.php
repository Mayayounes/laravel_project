<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;
class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    public function replies(): HasMany{
        return $this->hasMany(Reply::class);
    }
    public function post(): belongsTo{
        return $this->belongsTo(Post::class);
    }
    public function user(): belongsTo{
        return $this->belongsTo(User::class);
    }
}
