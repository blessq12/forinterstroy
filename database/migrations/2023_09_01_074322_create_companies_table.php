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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            // company info
            $table->string('name');
            $table->string('additional_info');
            $table->string('description');
            $table->string('logo');
            // contact info
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('country_additional');
            $table->string('state_additional');
            $table->string('city_additional');
            $table->string('street_additional');
            $table->string('house_additional');
            // phone numbers
            $table->string('phone');
            $table->string('phone_additional');
            $table->string('email_address');
            // social 
            $table->string('youtube');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('telegram');
            $table->string('vk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
