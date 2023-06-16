<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ApiProdukController extends Controller
{
    public function index(){
        $produk = Produk::get();
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil Diambil',
            'data'   => $produk
        ]);

    }
    public function tambah(Request $request){

        $produk = Produk::create([
            'id_kategori'=> $request->id_kategori,
            'nama' => $request->nama,
            'harga'=> $request->harga
        ]);
        

        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil Ditambah',
            'data'   => $produk
        ]);
    }

    public function update(Request $request){

        $produk = Produk::find($request -> id)->update([
            'id_kategori'=> $request->id_kategori,
            'nama' => $request->nama,
            'harga'=> $request->harga
        ]);

        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil Diubah',
            'data'   => $produk
        ]);
    }

    public function hapus($id){
        $produk = Produk::find($id)->delete();
        return response()->json([
            'status' => 200,
            'message'=> 'Data Berhasil Dihapus',
            'data'   => $produk
        ]);
    }
}

