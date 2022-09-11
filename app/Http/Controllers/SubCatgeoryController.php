<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCatgeory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SubCatgeoryController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if($user->role==1){
            $category = Category::where('status', '=', 0)->get();
            $subcategory = SubCatgeory::where('status', '=', 0)->get();
        }
        else{
            $category = Category::where('status', '=', 0)->where('user_id','=',$user->id)->orWhere('user_id','=',1)->get();
            $subcategory = SubCatgeory::where('user_id','=',$user->id)->get();
        }

        return view('admin.subcategory.index', compact('category', 'subcategory'));
    }
    public function index2()
    {
        $user = Auth::user();
        if($user->role==1){
            $category = Category::where('status', '=', 0)->get();
            $subcategory = SubCatgeory::where('status', '=', 1)->get();
        }
        else{
            $category = Category::where('status', '=', 0)->where('user_id','=',$user->id)->where('user_id','=',1)->get();
            $subcategory = SubCatgeory::where('user_id','=',$user->id)->get();
        }
        return view('admin.subcategory.index', compact('category', 'subcategory'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $subcategory = new SubCatgeory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->user_id = Auth::user()->id;
        if($user->role==2){
            $subcategory->status=1;
        }
        $subcategory->save();
        return redirect()->back()->with('message', 'Record Added Successfully !');
    }

    public function show(SubCatgeory $subCatgeory)
    {
        //
    }


    public function edit($id)
    {
        $subcategory = SubCatgeory::find($id);
        $subcategory->status = 0;
        $subcategory->save();
        return redirect()->back()->with('info', 'Record Status Updated Successfully !');

    }

    public function update(Request $request, $id)
    {
        $subcategory = SubCatgeory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->update();
        return redirect()->back()->with('message', 'Record Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCatgeory $subCatgeory
     * @return Response
     */
    public
    function destroy($id)
    {
        $subcategory = SubCatgeory::find($id);
        $subcategory->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
    }
}
