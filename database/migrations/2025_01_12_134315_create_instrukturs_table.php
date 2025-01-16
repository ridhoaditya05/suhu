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
        Schema::create('instrukturs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();  // Untuk menyimpan nama instruktur dan memastikan unik
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('instrukturs');
    }
    
};
