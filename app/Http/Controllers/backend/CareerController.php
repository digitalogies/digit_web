<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CareerController extends Controller
{
    public function view()
    {
        $allrecord=Career::get();
        return view('backend.career.view',compact('allrecord'));
    }

    public function add()
    {
        return view('backend.career.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'tittle'=>'required',
            'designation'=>'required',
            'requirment'=>'required',
            'location'=>'required',
            // 'responsibilities'=>'required',
            ]);

        $add=new Career();
        $add->tittle=$request->tittle;
        $add->slug=\Str::slug($request->tittle);
        $add->designation=$request->designation;
        $add->requirment=$request->requirment;
        $add->responsibilities=$request->responsibilities;
        $add->location=$request->location;
        $add->save();
        return redirect()->route('admin_career');
    }

    public function edit($id)
    {
        $edit=Career::find($id);
        return view('backend.career.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'tittle'=>'required',
            'designation'=>'required',
            'requirment'=>'required',
            'location'=>'required',
            // 'responsibilities'=>'required',
            ]);

        $update=Career::find($id);
        $update->tittle=$request->tittle;
        $update->slug=\Str::slug($request->tittle);
        $update->designation=$request->designation;
        $update->responsibilities=$request->responsibilities;
        $update->requirment=$request->requirment;
        $update->location=$request->location;
        $update->update();
        return redirect()->route('admin_career');
    }

    public function delete($id)
    {
        $delete=Career::find($id);
        $delete->delete();
        return back();
    }
    public function job()
    {
        $jobs=Job::get();
        return view('backend.career.job',compact('jobs'));
    }

    public function job_detail($id)
    {
        $detail=Job::find($id);
        return view('backend.career.job_details',compact('detail'));
    }
}
