<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function view()
    {
        $allrecord=Portfolio::with('get_services')->get();
        return view('backend.portfolio.view',compact('allrecord'));
    }

    public function add()
    {
        $services=Services::get();
        return view('backend.portfolio.add',compact('services'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'detail'=>'required',
            'image'=>'required',
            'service_id'=>'required',
            'client'=>'required',
            'duration'=>'required',
            'website'=>'required',
            'tag'=>'required',
        ]);

        $add=new Portfolio();
        $add->name=$request->name;
        $add->slug=\Str::slug($request->name);
        $add->description=$request->description;
        $add->detail=$request->detail;
        $add->service_id=$request->service_id;
        $add->client=$request->client;
        $add->duration=$request->duration;
        $add->website=$request->website;
        $add->tag=$request->tag;
        if($request->file('image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $add->image = $filename;
        }
        $add->save();
        return redirect()->route('admin_portfolio');
    }

    public function edit($id)
    {
        $edit=Portfolio::find($id);
        $services=Services::get();
        return view('backend.portfolio.edit',compact('edit','services'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'detail'=>'required',
            'service_id'=>'required',
            'client'=>'required',
            'duration'=>'required',
            'website'=>'required',
            'tag'=>'required',
        ]);

        $update=Portfolio::find($id);
        $update->name=$request->name;
        $update->slug=\Str::slug($request->name);
        $update->description=$request->description;
        $update->detail=$request->detail;
        $update->service_id=$request->service_id;
        $update->client=$request->client;
        $update->duration=$request->duration;
        $update->website=$request->website;
        $update->tag=$request->tag;
        if($request->file('image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $update->image = $filename;
        }
        $update->update();
        return redirect()->route('admin_portfolio');
    }

    public function delete($id)
    {
        $delete=Portfolio::find($id);
        $image_path = "public/assets/frontend/images/".$delete->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $delete->delete();
        return back();
    }
}
