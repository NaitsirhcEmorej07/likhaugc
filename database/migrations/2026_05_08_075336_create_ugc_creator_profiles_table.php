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
        Schema::create('ugc_creator_profiles', function (Blueprint $table) {

            $table->id();

            // BASIC INFO
            $table->string('full_name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();

            // NICHES
            $table->json('niches')->nullable();

            // BIO
            $table->text('bio')->nullable();

            // AVATAR
            $table->longText('avatar')->nullable();

            // SOCIAL LINKS
            $table->string('tiktok')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugc_creator_profiles');
    }
};
