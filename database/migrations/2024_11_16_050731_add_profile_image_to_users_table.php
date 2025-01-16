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
    Schema::table('users', function (Blueprint $table) {
        $table->string('profile_image')->nullable()->after('email'); // Menambahkan kolom setelah kolom email
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('profile_image'); // Menghapus kolom jika migration dibatalkan
    });
}
};
