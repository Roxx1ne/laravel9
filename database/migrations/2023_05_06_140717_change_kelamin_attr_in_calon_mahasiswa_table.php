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
        Schema::table('calon_mahasiswa', function (Blueprint $table) {
            $table->string('Kelamin')->length(2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calon_mahasiswa', function (Blueprint $table) {
            $table->string('Kelamin')->length(10)->nullable(false)->change();
        });
    }
};
