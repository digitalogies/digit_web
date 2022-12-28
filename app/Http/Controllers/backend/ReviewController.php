<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Review;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    public function view()
    {
        $allrecord=Review::get();
        return view('backend.review.view',compact('allrecord'));
    }

    public function add()
    {
        return view('backend.review.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'detail'=>'required',
            'image'=>'required',
        ]);

        $add=new Review();
        $add->name=$request->name;
        $add->detail=$request->detail;
        if($request->file('image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $add->image = $filename;
        }
        $add->save();
        return redirect()->route('admin_review');
    }

    public function edit($id)
    {
        $edit=Review::find($id);
        return view('backend.review.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'detail'=>'required',
        ]);

        $update=Review::find($id);
        $update->name=$request->name;
        $update->detail=$request->detail;
        if($request->file('image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $update->image = $filename;
        }
        $update->update();
        return redirect()->route('admin_review');
    }

    public function delete($id)
    {
        $delete=Review::find($id);
        $image_path = "public/assets/frontend/images/".$delete->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $delete->delete();
        return back();
    }
}
