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

            $table->string('contact_email')->nullable();

            $table->string('mobile_number')->nullable();

            $table->text('additional_notes')->nullable();

            $table->string('status')->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ugc_creator_profiles', function (Blueprint $table) {

            $table->dropColumn([

                'contact_email',
                'mobile_number',
                'additional_notes',
                'status',

            ]);
        });
    }
};
