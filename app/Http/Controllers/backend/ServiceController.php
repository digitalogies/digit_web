<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function view()
    {
        $allrecord=Services::get();
        // dd($allrecord);
        return view('backend.services.view',compact('allrecord'));
    }

    public function add()
    {
        return view('backend.services.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
            'inner_image'=>'required',
            'icon_svg'=>'required',
        ]);

        $add=new Services();
        $add->name=$request->name;
        $add->slug=\Str::slug($request->name);
        $add->description=$request->description;
        $add->detail=$request->detail;
        $add->icon=$request->icon_svg;
        if($request->file('image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $add->image = $filename;
        }
        if($request->file('inner_image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('inner_image')->extension();
            $move = $request->file('inner_image')->move(public_path().'/assets/frontend/images/',$filename);
            $add->inner_image = $filename;
        }
        $add->save();
        return redirect()->route('admin_service');
    }

    public function edit($id)
    {
        $edit=Services::find($id);
        return view('backend.services.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
        // dd($request,$id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $update=Services::find($id);
        $update->name=$request->name;
        $update->slug=\Str::slug($request->name);
        $update->description=$request->description;
        $update->detail=$request->detail;
        $update->icon=$request->icon_svg;
        if($request->file('image'))
        {
            $image_path = "public/assets/frontend/images/".$update->image;
            if(File::exists($image_path))
            {
                File::delete($image_path);
            }

            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $update->image = $filename;
        }
        if($request->file('inner_image'))
        {
            $inner_image_path = "public/assets/frontend/images/".$update->inner_image;
            if(File::exists($inner_image_path))
            {
                File::delete($inner_image_path);
            }

            $filename = time().rand(2,9999).'.'.$request->file('inner_image')->extension();
            $move = $request->file('inner_image')->move(public_path().'/assets/frontend/images/',$filename);
            $update->inner_image = $filename;
        }

        $update->update();
        return redirect()->route('admin_service');
    }

    public function delete($id)
    {
        $delete=Services::find($id);
        $image_path = "public/assets/frontend/images/".$delete->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $inner_image_path = "public/assets/frontend/images/".$delete->inner_image;
        if(File::exists($inner_image_path))
        {
            File::delete($inner_image_path);
        }
        $delete->delete();
        return back();
    }
}
