<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcommerce601Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecommerce_601', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pengguna', 250);
            $table->string('produk', 250);
            $table->string('kategori', 250);
            $table->string('pesanan', 250);
            $table->string('transaksi_pembayaran', 250);
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
        Schema::dropIfExists('ecommerce_601');
    }
}
