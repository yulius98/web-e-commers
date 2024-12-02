<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts()
    {
        $products = DB::table('products')->paginate(10);
        return view('home', ['title' => 'Selamat Datang di Marketplace iDeaThings!', 'product' => $products]);
    }

    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('detail', ['title' => 'Detail Produk', 'product' => $product]);
    }

    public function umkm()
    {
        $products = DB::table('products')
            ->where('kategori', 'UMKM')
            ->paginate(10);

        return view('UMKM', [
            'title' => 'Produk Rumah Tangga',
            'products' => $products
        ]);
    }

    public function produkelektronik()
    {
        $products = DB::table('products')
            ->where('kategori', 'produk elektronik')
            ->paginate(10);

        
        return view('produkelektronik', [
            'title' => 'Produk Elektronik',
            'products' => $products
        ]);
    }

    public function produkrumah()
    {
        $products = DB::table('products')
            ->where('kategori', 'produk rumah')
            ->paginate(10);

        return view('produkrumah', [
            'title' => 'Produk Perlengkapan Rumah',
            'products' => $products
        ]);
    }

    public function produkpemberisih()
    {
        $products = DB::table('products')
            ->where('kategori', 'produk pemberisih')
            ->paginate(10);

        return view('produkpemberisih', [
            'title' => 'Produk Pembersih Rumah',
            'products' => $products
        ]);
    }

    public function produktravelling()
    {
        $products = DB::table('products')
            ->where('kategori', 'produk travelling')
            ->paginate(10);

        return view('produktravelling', [
            'title' => 'Produk Travelling',
            'products' => $products
        ]);
    }

    public function produkstationary()
    {
        $products = DB::table('products')
            ->where('kategori', 'produk stationary')
            ->paginate(10);

        return view('produkstationary', [
            'title' => 'Produk Stationary',
            'products' => $products
        ]);
    }

    public function produkmemasak()
    {
        $products = DB::table('products')
            ->where('kategori', 'produk memasak')
            ->paginate(10);

        return view('produkmemasak', [
            'title' => 'Produk Perlengkapan Memasak',
            'products' => $products
        ]);
    }

	public function searchUmkm(Request $request)
	{
		$query = $request->input('query');
		$products = Product::where('kategori', 'UMKM')
						->where(function($q) use ($query) {
							$q->where('produk', 'like', "%{$query}%")
								->orWhere('description', 'like', "%{$query}%");
						})
						->paginate(12);
		
		return view('UMKM', [
			'title' => 'UMKM Products',
			'products' => $products
		]);
	}

    public function fashion()
    {
        $products = DB::table('products')->where('kategori', 'Fashion')->get();
        return view('fashion', ['title' => 'Fashion', 'products' => $products]);
    }

    public function pakaianPria()
    {
        $products = DB::table('products')
            ->where('kategori', 'pakaian pria')
            ->paginate(10);

        return view('pakaianpria', [
            'title' => 'Koleksi Pakaian Pria',
            'products' => $products
        ]);
    }

    public function pakaianWanita()
    {
        $products = DB::table('products')
            ->where('kategori', 'pakaian wanita')
            ->paginate(10);

        return view('pakaianwanita', [
            'title' => 'Koleksi Pakaian Wanita',
            'products' => $products
        ]);
    }

    public function tasPria()
    {
        $products = DB::table('products')
        ->where('kategori', 'tas pria')
        ->paginate(10);

    return view('taspria', [
        'title' => 'Koleksi Tas Pria',
        'products' => $products
    ]);
    }

    public function tasWanita()
    {
        $products = DB::table('products')
            ->where('kategori', 'tas wanita')
            ->paginate(10);

        return view('taswanita', [
            'title' => 'Koleksi Tas Wanita',
            'products' => $products
        ]);
    }

    public function aksesoris()
    {
        $products = DB::table('products')
            ->where('kategori', 'aksesoris')
            ->paginate(10);

        return view('aksesoris', [
            'title' => 'Aksesoris',
            'products' => $products
        ]);
    }
}
