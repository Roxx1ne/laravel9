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
        Schema::create('calon_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->length(100);
            $table->string('Jurusan')->length(50);
            $table->integer('NIM')->length(10);
            $table->string('Kelamin')->length(10);
            $table->string('Agama')->length(15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_mahasiswa');
    }
};
