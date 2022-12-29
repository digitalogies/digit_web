<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Team;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function view()
    {
        $allrecord=Team::get();
        return view('backend.team.view',compact('allrecord'));
    }

    public function add()
    {
        $services=Services::get();
        return view('backend.team.add',compact('services'));
    }

    // public function save(Request $request)
    // {
    //     $request->validate([
    //         'name'=>'required',
    //         'designation'=>'required',
    //         'image'=>'required',
    //     ]);

    //     $add=new Team();
    //     $add->name=$request->name;
    //     $add->designation=$request->designation;
    //     $add->facebook_url=$request->facebook_url;
    //     $add->instagram_url=$request->instagram_url;
    //     $add->twitter_url=$request->twitter_url;
    //     $add->linkedin_url=$request->linkedin_url;
    //     if($request->file('image'))
    //     {
    //         $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
    //         $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
    //         $add->image = $filename;
    //     }
    //     $add->save();
    //     return redirect()->route('admin_team');
    // }

    public function edit($id)
    {
        $edit=Team::find($id);
        return view('backend.team.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'designation'=>'required',
        ]);

        $update=Team::find($id);
        $update->name=$request->name;
        $update->designation=$request->designation;
        $update->facebook_url=$request->facebook_url;
        $update->instagram_url=$request->instagram_url;
        $update->twitter_url=$request->twitter_url;
        $update->linkedin_url=$request->linkedin_url;
        if($request->file('image'))
        {
            $filename = time().rand(2,9999).'.'.$request->file('image')->extension();
            $move = $request->file('image')->move(public_path().'/assets/frontend/images/',$filename);
            $update->image = $filename;
        }
        $update->update();
        return redirect()->route('admin_team');
    }

    public function delete($id)
    {
        $delete=Team::find($id);
        $image_path = "public/assets/frontend/images/".$delete->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $delete->delete();
        return back();
    }
}
