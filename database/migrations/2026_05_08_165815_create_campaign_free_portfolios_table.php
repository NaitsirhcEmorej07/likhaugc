{{-- database/migrations/xxxx_xx_xx_xxxxxx_create_campaign_free_portfolios_table.php --}}

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
        Schema::create('campaign_free_portfolios', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('email');
            $table->text('facebook_link')->nullable();
            $table->text('social_link')->nullable();

            $table->longText('why_need');
            $table->longText('why_deserve');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_free_portfolios');
    }
};
