<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('status','=',0)->get();
       return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category=  new Category();
        $category->name = $request->name;
        $category->save();
<<<<<<< HEAD
        return  redirect()->back()->with('message', 'Record Added Successfully !');
=======
        return  redirect()->back()->with('success', 'Record Updated Successfully !');
>>>>>>> origin/main
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($id)
    {
        $category = Category::find($id);
        $category->delete();
        return  redirect()->back()->with('error', 'Record Deleted Successfully !');
=======
    public function show(Category $category)
    {
        //
>>>>>>> origin/main
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $category = Category::find($id);
        $category->name = $request->name;
        $category->update();
<<<<<<< HEAD
        return  redirect()->back()->with('message', 'Record Updated Successfully !');
=======
        return  redirect()->back()->with('success', 'Record Updated Successfully !');
>>>>>>> origin/main
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($id)
    {


=======
    public function destroy(Category $category)
    {
        //
>>>>>>> origin/main
    }
}
