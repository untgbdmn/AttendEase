<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_sekolah', function (Blueprint $table) {
            $table->unsignedBigInteger('sekolah_id')->primary()->autoIncrement();
            $table->string('nama_sekolah')->nullable();
            $table->string('npsn_sekolah')->nullable();
            $table->enum('jenjang_sekolah', ['sd', 'smp', 'sma', 'smk'])->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('email_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sekolah');
    }
};
