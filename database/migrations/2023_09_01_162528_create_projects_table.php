<?php

use App\Models\Category;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);
            $table->string('name');
            $table->string('price');
            $table->string('area');
            $table->string('useful_area');
            $table->string('wall_height');
            $table->string('rooms');
            $table->string('bath_rooms');
            $table->string('image_full_1');
            $table->string('image_full_2');
            $table->string('image_full_3');
            $table->string('image_full_4');
            $table->string('image_thumb_1');
            $table->string('image_thumb_2');
            $table->string('image_thumb_3');
            $table->string('image_thumb_4');
            $table->string('layout_first_floor');
            $table->string('layout_second_floor');
            $table->string('floors');
            $table->string('balcon');
            $table->string('terassa');
            $table->string('type_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
