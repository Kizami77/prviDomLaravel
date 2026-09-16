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

        //Schema ->nasa baza
        // Create -> schema::create -> CREATE TABLE
        // function (Blueprint $table) {} -? ovo je kod koji se izvrsava. $table -> vasa "contact" tabela u bazi
        Schema::create('contact', function (Blueprint $table) {
            $table->id(); // UNSIGNED ( ne moze biti negativan broj) ,big increments (BIG INT, AUTO INCREMENTS)
            $table->string('email');
            $table->string('subject');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
