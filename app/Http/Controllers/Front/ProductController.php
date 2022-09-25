<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cart()
    {
        $cartItems = Cart::getContent();
        return view('front.product.cart', compact('cartItems'));

    }
    public function addCart(Request $request)
    {
        $product = Product::find($request->id);
        \Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $product->img1,
            )
        ]);
        return redirect()->route('cart')->with('message', 'Product Add to Cart');

    }
    public function removeCart($id)
    {
        \Cart::remove($id);
       return redirect()->back();

    }
}
