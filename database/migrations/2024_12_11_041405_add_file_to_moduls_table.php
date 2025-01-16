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
    Schema::table('moduls', function (Blueprint $table) {
        $table->string('file')->nullable(); // Tambahkan kolom file
    });
}

public function down()
{
    Schema::table('moduls', function (Blueprint $table) {
        $table->dropColumn('file'); // Hapus kolom file pada rollback
    });
}
};
