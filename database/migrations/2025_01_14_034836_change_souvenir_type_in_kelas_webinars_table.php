<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('kelas_webinars', function (Blueprint $table) {
            $table->string('souvenir')->change(); // Mengubah tipe menjadi VARCHAR
        });
    }

    public function down()
    {
        Schema::table('kelas_webinars', function (Blueprint $table) {
            $table->integer('souvenir')->change(); // Kembali ke tipe sebelumnya jika perlu
        });
    }
};
