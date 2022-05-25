<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            // $table->string('kodeProduk', 11);
            // $table->date('tgl_Produk');
            // $table->string('satuan');
            // $table->integer('harga');
            $table->string('kode_stock_produk', 11)->unique();
            $table->date('tgl_stock_produk');
            $table->string('jumlah_stock_produk');
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
        Schema::dropIfExists('produks');
    }
}
