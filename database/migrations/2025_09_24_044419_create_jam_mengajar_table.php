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
        Schema::create('jam_mengajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelatihan')->constrained('calendar')->onDelete('cascade');
            $table->string('nip_widyaiswara');
            $table->foreign('nip_widyaiswara')->references('nip')->on('widyaiswara')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->integer('jp');
            $table->string('lokasi')->nullable();
            $table->string('metode')->nullable();
            $table->string('tempat')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('tugas')->nullable();
            $table->string('jenis_diklat')->nullable();
            $table->text('materi')->nullable();
            $table->string('nip_widyaiswara_2')->nullable();
            $table->string('nip_widyaiswara_3')->nullable();
            $table->string('nip_widyaiswara_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jam_mengajar');
    }
};
