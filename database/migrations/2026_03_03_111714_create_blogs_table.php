<?php

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
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();

            $table->string('language');

            $table->longText('description')->nullable();

            // Self-relation (parent blog)
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('blogs')
                ->nullOnDelete();

            // Media relation
            $table->foreignId('image_id')
                ->nullable()
                ->constrained('media')
                ->cascadeOnDelete();

            $table->boolean('status')
                ->default(1)
                ->comment('0 = inactive, 1 = active');
            $table->string('category')->nullable();
            $table->string('reading_time')->nullable();
            $table->boolean('featured')->default(false);
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
