<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function view()
    {
        $allrecord=Category::get();
        // dd($allrecord);
        return view('backend.category.view',compact('allrecord'));
    }

    public function add()
    {
        return view('backend.category.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $add=new Category();
        $add->name=$request->name;
        $add->slug=\Str::slug($request->name);
        $add->save();
        return redirect()->route('admin_category');
    }

    public function edit($id)
    {
        $edit=Category::find($id);
        return view('backend.category.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
        // dd($request,$id);
        $request->validate([
            'name'=>'required',
        ]);

        $update=Category::find($id);
        $update->name=$request->name;
        $update->slug=\Str::slug($request->name);
        $update->update();
        return redirect()->route('admin_category');
    }

    public function delete($id)
    {
        $delete=Category::find($id);
        $delete->delete();
        return back();
    }
}
