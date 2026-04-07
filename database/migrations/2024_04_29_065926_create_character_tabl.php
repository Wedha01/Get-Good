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
        Schema::create('karakters', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->text('description');
            $table->string('relic')->nullable();
            $table->string('relicdescription')->nullable();
            $table->string('relic2')->nullable();
            $table->string('planetaryset')->nullable();
            $table->string('planetarysetdescription')->nullable();
            $table->string('lightcone')->nullable();
            $table->string('lightconedescription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karakters');
    }
};
