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
            $table->integer('Umur')->length(2)->after('Name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calon_mahasiswa', function (Blueprint $table) {
            $table->integer('Umur')->length(5)->after('Name')->nullable('false')->change();
        });
    }
};
