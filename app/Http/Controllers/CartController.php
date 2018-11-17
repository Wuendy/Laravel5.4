<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike=Product::inRandomOrder()->take(5)->get();
        return view('cart')->with('mightAlsoLike',$mightAlsoLike);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates=Cart::search(function($cartItem,$rowId)use($request){
            return $cartItem->id===$request->id;});
        if($duplicates->isNotEmpty()){return redirect()->route('cart.index')->with('success_message','Item is already in your cart!');}

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message','Item has been removed from your cart!');
    }

    public function switchToSaveForLater($id)
    {

        $item=Cart::get($id);
        Cart::remove($id);
        $duplicates=Cart::instance('saveForLater')->search(function($cartItem,$rowId)use($id){
            return $rowId===$id;});
        if($duplicates->isNotEmpty()){return redirect()->route('cart.index')->with('success_message','Item is already in your save for later!');}
        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item has been save for later!');
    }
}
