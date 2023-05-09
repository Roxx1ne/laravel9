<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calon_mahasiswa', function (Blueprint $table) {

            $table->unsignedBigInteger('relasi')->required()->after('Agama');

            $table->foreign('relasi')->references('id')->on('relasi_table')->onDelete('restrict');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calon_mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['relasi']);
            $table->dropColumn('relasi');
        });
    }
};
