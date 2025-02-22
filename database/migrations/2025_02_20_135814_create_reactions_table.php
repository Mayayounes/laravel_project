<?php

use App\Models\Post;
use App\Models\User;
use App\Models\ReactionType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table ->foreignIdFor(Post::class)->constrained();
            $table ->foreignIdFor(User::class)->constrained();
            $table ->foreignIdFor(ReactionType::class)->constrained();
            $table->timestamps();
            $table ->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions');
    }
};
