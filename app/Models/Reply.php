<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Reply extends Model
{
    /** @use HasFactory<\Database\Factories\ReplyFactory> */
    use HasFactory;

    public function comment(): belongsTo{
        return $this->belongsTo(Comment::class);
    }
    public function user (): belongsTo{
        return $this->belongsTo(User::class);
    }
}
