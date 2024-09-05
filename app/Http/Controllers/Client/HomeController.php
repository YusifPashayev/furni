<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->where('is_special', '=', true)
            ->take(3)
            ->get();

        return view("home")->with('products', $products);
    }
}
