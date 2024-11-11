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
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('phone');
            $table->string('phone_optional')->nullable();
            $table->string('email');
            $table->string('email_optional')->nullable();
            $table->text('address');
            $table->text('address_optional')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('experience')->nullable();
            $table->text('medical_product')->nullable();
            $table->text('client_satisfy')->nullable();
            $table->text('country_product')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_infos');
    }
};
