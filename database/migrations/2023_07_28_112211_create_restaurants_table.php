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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('logo_url');
            $table->string('menu_url');
            $table->string('instagram_url');
            $table->string('facebook_url');
            $table->string('youtube_url');
            $table->string('map_url');
            $table->string('location');
            $table->string('phone_number');
            $table->text('description');
            $table->string('meta_title');
            $table->string('meta_description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
