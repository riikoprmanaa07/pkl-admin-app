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
    Schema::create('bpsdmdja_pelatihan', function (Blueprint $table) {
        $table->id();
        $table->string('nip_widyaiswara');
        $table->unsignedBigInteger('id_pelatihan');
        $table->date('tanggal');
        $table->time('jam_mulai');
        $table->time('jam_selesai');
        $table->integer('jp');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpsdmdja_pelatihan');
    }
};
