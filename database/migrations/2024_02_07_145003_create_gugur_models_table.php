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
        Schema::create('gugur_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ggr');
            $table->string('asal');
            $table->string('program_ggr');
            $table->string('angkatan_ggr');
            $table->string('jurusan_ggr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gugur_models');
    }
};
