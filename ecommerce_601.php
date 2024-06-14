<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ecommerce_601 extends Model
{
    protected $table = 'ecommerce_601';

    protected $fillable =  [
                            'pengguna',
                            'produk',
                            'kategori',
                            'pesanan',
                            'transaksi_pembayaran',
                        ];
}