<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce_601;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view("/home", ["key" => "/home"]);
    }

    public function ecommerce_601()
    {
        $ecommerce_601 = ecommerce_601::orderBy('id', 'desc') ->get();
        return view("/ecommerce_601", ["key" => "/ecommerce_601", "ec" => $ecommerce_601]);
    }

    public function formAddEcommerce()
    {
        return view("form-add", ["key" =>"/ecommerce_601"]);
    }

    public function saveEcommerce(Request $request)
    {
        $file_name = time().'-'. $request ->file('pesanan')->getClientOriginalName();
        $path = $request->file('pesanan')->storeAs('pesanan', $file_name, 'public');

        ecommerce_601::create([
            'pengguna' => $request->pengguna,
            'produk' => $request->produk,
            'kategori' => $request->kategori,
            'transaksi_pembayaran' => $request->transaksi_pembayaran,
            'pesanan' => $path

        ]);

        return redirect('/ecommerce_601')->with('alert', 'Data Berhasil di Simpan');
    }

    public function formeditEcommerce($id)
    {
        $ecommerce_601 = ecommerce_601::find($id);
        return view("form-edit", ["key" => "/ecommerce_601", "ec" => $ecommerce_601]);
    }

    public function updateEcommerce($id, Request $request)
    {
        $ecommerce_601 = ecommerce_601::find($id);

        $ecommerce_601->pengguna = $request->pengguna;
        $ecommerce_601->produk = $request->produk;
        $ecommerce_601->kategori = $request->kategori;
        $ecommerce_601->transaksi_pembayaran = $request->transaksi_pembayaran;

        if ($request -> pesanan)
        {
            if ($ecommerce_601->pesanan)
            {
                Storage::disk('public')-delete($ecommerce_601->pesanan);
            }

            $file_name = time().'-'.$request->file('pesanan')->getClientOriginalName();
            $path = $request->file('pesanan')->storeAs('poster', $file_name, 'public');
            $ecommerce_601->$pesanan = $path;
        }
        $ecommerce_601->save();
        return redirect("/ecommerce_601")->with('alert', 'Data Berhasil di Ubah');
    }

    public function deleteEcommerce ($id)
    {
        $ecommerce_601 = ecommerce_601::find($id);
        if ($ecommerce_601->pesanan)
        {
            Storage::disk('public')->delete($ecommerce_601->pesanan);
        }
        $ecommerce_601->delete();

        return redirect("/ecommerce_601")->with('alert', 'Data Berhasil di Hapus');
    }

    public function ceklogin()
        {
            return view("/login");
        }
    
        public function formedituser()
        {
            return view("formedituser", ["key" => ""]);
        }

        public function updateuser(Request $request)
        {
            if ($request -> password_baru == $request -> konfirmasi_password)
            {
                $user = Auth::user();

                $user->password = bcrypt($request->password_baru);
                $user->save();

                return redirect("/user") -> with("info", "Password Berhasil di Ubah");
            }
            else
            {
                return redirect("/user")->with("info", "Password Gagal di Ubah");
            }

        }

}