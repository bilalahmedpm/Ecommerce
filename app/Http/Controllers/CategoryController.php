<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role==1){
            $category = Category::where('status','=',0)->get();
        }
        else{
            $category = Category::where('user_id','=',$user->id)->get();
        }
        return view('admin.category.index',compact('category'));
    }
    public function index2()
    {
        $user = Auth::user();
        if($user->role==1){
            $category = Category::where('status','=',1)->get();
        }
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
        $user = Auth::user();
        $category=  new Category();
        $category->name = $request->name;
        $category->user_id = $user->id;
        if($user->role==2){
            $category->status= 1;
        }
        if($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $category->img = 'img/' . $name;
        }
        $category->save();
        return  redirect()->back()->with('message', 'Record Added Successfully !');

    }


    public function show($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
    }


    public function edit($id)
    {
        $category = Category::find($id);
        $category->status = 0;
        $category->save();
        return redirect()->back()->with('info', 'Record Status Updated Successfully !');
    }


    public function update(Request $request, $id)
    {   $category = Category::find($id);
        $category->name = $request->name;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $category->img = 'img/' . $name;
        }
        $category->update();

        return  redirect()->back()->with('message', 'Record Updated Successfully !');
    }

    public function destroy($id)
    {

    }

}
