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
        Schema::table('ugc_creator_profiles', function (Blueprint $table) {

            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('font_style')->nullable();
            $table->string('button_radius')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ugc_creator_profiles', function (Blueprint $table) {

            $table->dropColumn([

                'primary_color',
                'secondary_color',
                'font_style',
                'button_radius',

            ]);
        });
    }
};
