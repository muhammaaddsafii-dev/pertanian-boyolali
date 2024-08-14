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
        Schema::create('trayu', function (Blueprint $table) {
            $table->id();
            $table->string('KECAMATAN')->nullable();
            $table->string('DESA')->nullable();
            $table->string('DNOP')->nullable();
            $table->string('PL')->nullable();
            $table->string('ERDKK')->nullable();
            $table->string('NIK_1')->nullable();
            $table->string('ALMT_1')->nullable();
            $table->string('PMLK')->nullable();
            $table->string('NIK_2')->nullable();
            $table->string('ALMT_2')->nullable();
            $table->string('PGRP')->nullable();
            $table->string('NIK_3')->nullable();
            $table->string('ALMT_3')->nullable();
            $table->string('PNYW')->nullable();
            $table->string('NIK_4')->nullable();
            $table->string('ALMT_4')->nullable();
            $table->string('KL_TN')->nullable();
            $table->string('BLOK')->nullable();
            $table->string('JBTN')->nullable();
            $table->integer('JML_PTK')->nullable();
            $table->string('SB_PPK')->nullable();
            $table->string('ALSTN')->nullable();
            $table->string('SMBR_AIR')->nullable();
            $table->string('N_DI')->nullable();
            $table->string('KOM_MT1')->nullable();
            $table->string('KOM_MT2')->nullable();
            $table->string('KOM_MT3')->nullable();
            $table->string('WT_MT1')->nullable();
            $table->string('WT_MT2')->nullable();
            $table->string('WT_MT3')->nullable();
            $table->float('PR_MT1')->nullable();
            $table->float('PR_MT2')->nullable();
            $table->float('PR_MT3')->nullable();
            $table->float('LUAS')->nullable();
            $table->json('geometry')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trayu');
    }
};
