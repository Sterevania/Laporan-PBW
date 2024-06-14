@extends('layouts.main')
@section('title', 'ecommerce_601')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <a href="/ecommerce_601/add-form" class="btn btn-primary"><i class="bi bi-plus-square"></i>ecommerce_601</a>
        <div class="card-body">
            @if (@session('alert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            @endif
            <!--Tabel Disini-->
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pengguna</th>
                        <th>Produk</th>
                        <th>Kategori</th>
                        <th>Transaksi Pembayaran</th>
                        <th>Pesanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ec as $idx => $e)
                    <tr>
                        <td> {{ $idx+1 }} </td>
                        <td>{{ $e->pengguna }}</td>
                        <td>{{ $e->produk }}</td>
                        <td>{{ $e->kategori }}</td>
                        <td>{{ $e->transaksi_pembayaran }}</td>
                    <td>
                    <img src = "{{ asset('/storage/' . $e->pesanan) }}" alt="{{ $e->pesanan }}" height="80" width="80">
                    </td> 
                    <td>
                        <a href="/ecommerce_601/edit-form/{{ $e->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <a href="/delete/{{ $e->id }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                    </td>
                    </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>
@endsection
