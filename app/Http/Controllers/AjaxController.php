<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function filter(Request $request)
    {
        $selectedCategories = $request->input('categories');

        $filteredProducts = Produk::when($selectedCategories, function ($query, $selectedCategories) {
            return $query->whereIn('kategori_produk_id', $selectedCategories);
        })->get();  
    
        
        return view('partials.filtered-products', compact('filteredProducts'))->render();
    
    }
}
