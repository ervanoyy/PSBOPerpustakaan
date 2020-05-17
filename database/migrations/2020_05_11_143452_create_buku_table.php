<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_BukuInventaris');
            $table->string('Kode_BukuLemari');
            $table->string('Judul_Buku');
            $table->string('Gambar');
            $table->string('Kategori');
            $table->string('JenisPustaka');
            $table->string('Pengarang');
            $table->unsignedTinyInteger('Stok');
            $table->string('Status');
            $table->string('Keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
