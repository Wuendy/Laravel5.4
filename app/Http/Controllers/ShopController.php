<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::inRandomOrder()->take(12)->get();
        return view('shop')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
       $product=Product::where('slug',$slug)->firstOrFail();
       $mightAlsoLike=Product::where('slug','!=',$slug)->inRandomOrder()->take(5)->get();
       return view('product')->with(['product'=>$product,'mightAlsoLike'=>$mightAlsoLike]);
    }
    
}
