@extends('layouts.main')
@section('title', 'form Edit Ecommerce')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <!-- FORM EDIT ECOMMERCE DISINI -->
            <form action="/update/{{ $ec->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Pengguna</label>
                    <input type="text" name="pengguna" class="form-control" value="{{ $ec ->pengguna }}" required>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <select name="produk" class="form-control">
                        <option value="0">Pilih Produk</option>
                        <option value="Wardah" {{ ($ec->produk == "Wardah") ? "selected" : "" }}>Wardah</option>
                        <option value="Luxcrime" {{ ($ec->produk == "Luxcrime") ? "selected" : "" }}>Luxcrime</option>
                        <option value="Hanasui" {{ ($ec->produk == "Hanasui") ? "selected" : "" }}>Hanasui</option>
                        <option value="Somethinc" {{ ($ec->produk == "Somethinc") ? "selected" : "" }}>Somethinc</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="0">Pilih Kategori</option>
                        <option value="Bedak" {{ ($ec->kategori == "Bedak") ? "selected" : "" }}>Bedak</option>
                        <option value="Lipstik" {{ ($ec->kategori == "Lipstik") ? "selected" : "" }}>Lipstik</option>
                        <option value="Foundation" {{ ($ec->kategori == "Foundation") ? "selected" : "" }}>Foundation</option>
                        <option value="Maskara" {{ ($ec->kategori == "Maskara") ? "selected" : "" }}>Maskara</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Transaksi Pembayaran</label>
                    <select name="transaksi_pembayaran" class="form-control">
                        <option value="0">Pilih Pembayaran</option>
                        <option value="Transfer" {{ ($ec->transaksi_pembayaran == "Transfer") ? "selected" : "" }}>Transfer</option>
                        <option value="Cash" {{ ($ec->transaksi_pembayaran == "Cash") ? "selected" : "" }}>Cash</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pesanan</label>
                    <input type="file" name="pesanan" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                    <img src="{{ asset('/storage/' . $ec->pesanan) }}" alt="{{ $ec->pesanan }}" height="80" width="80">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection
