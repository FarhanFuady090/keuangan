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
        Schema::create('unitpendidikan', function (Blueprint $table) {
            $table->id('idunitpendidikan');
            $table->enum('nama_unit', ['TK', 'SD', 'SMP', 'SMA', 'TPQ', 'PONDOK', 'MADIN'])->unique();
            $table->enum('kategori', ['FORMAL', 'NON FORMAL', 'EXTRA']);
            $table->enum('status_unit', ['AKTIF', 'TIDAK AKTIF'])->default('AKTIF');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unitpendidikan');
    }
};
