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
        Schema::table('blogs', function (Blueprint $table) {
            // Add columns after 'description' (or choose a better position)
            $table->string('category')->nullable()->after('description');
            $table->string('reading_time')->nullable()->after('category');
            $table->boolean('featured')->default(false)->after('reading_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['category', 'reading_time', 'featured']);
        });
    }
};
