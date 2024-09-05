<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(8);
        $categories = DB::table('categories')->get();

        // dd($products, $categories);


        return view('shop')
            ->with('products', $products)
            ->with('categories', $categories);
    }

    public function productsByCategory(string $slug)
    {
        $categories = DB::table('categories')->get();
        $selectedCategory = DB::table('categories')->where("slug", "=", $slug)->first();
        $products1 = DB::table('products')->where('category_id', $selectedCategory->id)->paginate(8);


        $products = Product::where('category_id', $selectedCategory->id)->paginate(8);

        dd($products, $products1);


        return view('shop')
            ->with('products', $products)
            ->with('categories', $categories);
    }
}
