<?php

use App\Models\User;
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
        Schema::create('blogs', function (Blueprint $table) {
            $table->ulid('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('body');
            $table->string('thumbnail')->nullable();
            $table->enum('status', ['draft', 'published', 'disabled'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->foreignIdFor(User::class, 'user_id')->nullable()->cascadeOnUpdate();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
