<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use App\SubCatgeory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $product = Product::orderBy('created_at','DESC')->get();
        return  view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','=',0)->get();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->sku = $request->sku;
        $product->method = $request->selling_method;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->s_date = $request->s_date;
        $product->e_date = $request->e_date;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;
        if ($request->hasfile('img1')) {

            $image1 = $request->file('img1');
            $name = time() . 'img1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $product->img1 = 'img/' . $name;
        }
        if ($request->hasfile('img2')) {

            $image1 = $request->file('img2');
            $name = time() . 'img2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $product->img2 = 'img/' . $name;
        }
        if ($request->hasfile('img3')) {

            $image1 = $request->file('img3');
            $name = time() . 'img3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $product->img3 = 'img/' . $name;
        }
        $product->save();
        return redirect()->back()->with('message', 'Record Added Successfully !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function fetchmaincategory(Request $request)
    {
        $subcategories = SubCatgeory::where('status', '=', 0)->where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
}
