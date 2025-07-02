<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->get();
        return view('home', compact('produk'));
    }
}
