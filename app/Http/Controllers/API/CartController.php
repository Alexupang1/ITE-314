<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;
use Hash;  

class CartController extends Controller
{
    //SHOWS PRODUCTS IN CART
    public function index(){
        $cart = Cart::all();
        return response()->json(['Cart' => $cart]);
    }

    //ADDS TO CART
    public function add_cart($id, Request $request) {
        $product = Products::find($id);
        DB::table('carts')->insert([
            'name' => $product->name,
            'photo' => $product->photo,
            'price' => $product->price,
            'details' => $product->details,
            'category' => $product->category,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        return response()->json(['message' => 'Product added to cart successfully'], 200);
    }


    //DELETES A PRODUCT FROM CART
    public function destroy($id){
        $product = Products::find($id);
        $product -> delete();
        return response()->json(['message' => "succesfully deleted"]);
    }

    //CART CHECKOUT (PRODUCTS REDIRECT TO BOUGHT PRODUCTS AND RECEIPT SHOWS)
    public function checkout(){
        //
    }
}
