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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('favicon');
            $table->string('phone');
            $table->string('email');
            $table->string('logo');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
