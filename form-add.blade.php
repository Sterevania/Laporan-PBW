@extends('layouts.main')
@section('title', 'Form Add Ecommerce')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <!-- FORM ADD PRODUK DISINI -->
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Pengguna</label>
                    <input type="text" name="pengguna" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <select name="produk" class="form-control" required>
                        <option value="0">Pilih Produk</option>
                        <option value="Wardah">Wardah</option>
                        <option value="Luxcrime">Luxcrime</option>
                        <option value="Hanasui">Hanasui</option>
                        <option value="Somethinc">Somethinc</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="0">Pilih Kategori</option>
                        <option value="Bedak">Bedak</option>
                        <option value="Lisptik">Lipstik</option>
                        <option value="Foundation">Foundation</option>
                        <option value="Maskara">Maskara</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pesanan</label>
                    <input type="file" name="pesanan" class="form-control-file" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label>Transaksi Pembayaran</label>
                    <select name="transaksi_pembayaran" class="form-control" required>
                        <option value="0">Pilih Pembayaran</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Cash">Cash</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection
