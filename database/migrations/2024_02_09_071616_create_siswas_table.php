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
        Schema::create('siswas', function (Blueprint $table) {
            $table->char('nisn', 10)->primary();
            $table->char('nis', 8);
            $table->string('nama');
            $table->foreignId('id_kelass')->references('id_kelass')->on( 'kelass');
            $table->text('alamat');
            $table->string('no_telp', 13);
            $table->foreignId('id_spps')->references('id_spps')->on( 'spps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
