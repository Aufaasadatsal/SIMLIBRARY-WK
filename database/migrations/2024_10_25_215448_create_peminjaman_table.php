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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kdPeminjaman', 15)->nullable(); // Make it nullable if it’s optional
            $table->string('kdAnggota', 13)->nullable();
            $table->string('name', 50);
            $table->string('rayon', 15);
            $table->string('kdItem', 25);
            $table->string('judulItem', 255);
            $table->string('keterangan', 75)->nullable();
            $table->timestamps();
        });             
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
