<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use App\SubCatgeory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 1) {
            $product = Product::where('method', '=', 1)->orderBy('created_at', 'DESC')->get();
        } else {
            $product = Product::where('user_id', '=', $user->id)->where('method', '=', 1)->orderBy('created_at', 'DESC')->get();
        }
        return view('admin.product.index', compact('product'));
    }

    public function index2()
    {
        $user = Auth::user();
        if ($user->role == 1) {
            $product = Product::where('method', '=', 2)->orderBy('created_at', 'DESC')->get();
        } else {
            $product = Product::where('user_id', '=', $user->id)->where('method', '=', 2)->orderBy('created_at', 'DESC')->get();
        }
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::where('status', '=', 0)->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
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
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status', '=', 0)->get();
        $subcategories = SubCatgeory::where('status', '=', 0)->where('category_id', '=', $product->category_id)->get();
        return view('admin.product.edit', compact('product', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->method = $request->selling_method;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->s_date = $request->s_date;
        $product->e_date = $request->e_date;
        $product->description = $request->description;
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
        $product->update();
        return redirect()->back()->with('message', 'Record Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
        //
    }

    public function fetchmaincategory(Request $request)
    {
        $subcategories = SubCatgeory::where('status', '=', 0)->where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
}
