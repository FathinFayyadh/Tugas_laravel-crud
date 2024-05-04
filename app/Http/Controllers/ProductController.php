<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;


class ProductController extends Controller
{

    public function form()
    {
        return view("form");
    }

    public function products()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function formCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'name' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar.required' => 'Error: Field gambar wajib di isi!',
            'name.required' => 'Error: Field nama wajib di isi!',
            'berat.required' => 'Error: Field berat wajib di isi!',
            'harga.required' => 'Error: Field harga wajib di isi!',
            'stock.required' => 'Error: Field stock wajib di isi!',
            'kondisi.required' => 'Error: Field kondisi wajib di isi!',
            'deskripsi.required' => 'Error: Field deskripsi wajib di isi!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $product = new Product();
        $product->gambar = $request->gambar;
        $product->nama = $request->name;
        $product->berat = $request->berat;
        $product->harga = $request->harga;
        $product->stock = $request->stock;
        $product->kondisi = $request->kondisi;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect()->route('admin.create')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function admin()
    {
        $products = Product::all();
        return view("admin", compact('products'));
    }
    public function formEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('form', compact('product'));
    }
    public function formUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'name' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar.required' => 'Error: Field gambar wajib di isi!',
            'name.required' => 'Error: Field nama wajib di isi!',
            'berat.required' => 'Error: Field berat wajib di isi!',
            'harga.required' => 'Error: Field harga wajib di isi!',
            'stock.required' => 'Error: Field stock wajib di isi!',
            'kondisi.required' => 'Error: Field kondisi wajib di isi!',
            'deskripsi.required' => 'Error: Field deskripsi wajib di isi!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $product = Product::findOrFail($id);
        $product->gambar = $request->gambar;
        $product->nama = $request->name;
        $product->berat = $request->berat;
        $product->harga = $request->harga;
        $product->stock = $request->stock;
        $product->kondisi = $request->kondisi;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect()->route('admin.create')->with('success', 'Produk berhasil diperbarui!');
    }
    public function formDelete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.create')->with('success', 'Produk berhasil dihapus!');
    }
}
