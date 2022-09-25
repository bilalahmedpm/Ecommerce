<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCatgeory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $category = Category::where('status','=',0)->latest()->get();
        $subcategory = SubCatgeory::where('status','=',0)->latest()->get();
        $product = Product::where('status','=',0)->latest()->get();

        return view('front.index',compact('category','product','subcategory','user'));
    }
    public function singleProduct($id)
    {
        $product = Product::find($id);
        $products = Product::where('status','=',0)->latest()->get();
        return view('front.product.single',compact('product','products'));
    }
}
