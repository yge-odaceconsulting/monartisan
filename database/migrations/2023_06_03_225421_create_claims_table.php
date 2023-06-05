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
        Schema::disableForeignKeyConstraints();

        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('contact_1', 255)->nullable();
            $table->string('contact_2', 255)->nullable();
            $table->string('place', 255)->nullable();
            $table->date('date')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('assurance_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
