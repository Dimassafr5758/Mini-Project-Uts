<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->decimal('harga_barang', 10, 2);
            $table->text('deskripsi_barang');
            $table->unsignedBigInteger('satuan_id'); // foreign key
            $table->timestamps();

            $table->foreign('satuan_id')->references('id')->on('satuan');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
