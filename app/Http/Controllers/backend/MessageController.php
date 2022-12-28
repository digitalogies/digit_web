<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Subscription;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        $allrecord=ContactUs::get();
        return view('backend.messages.message',compact('allrecord'));
    }
    public function quote()
    {
        $allrecord=ContactUs::where('service_name', '!=' , 'null')->get();
        return view('backend.messages.quote',compact('allrecord'));
    }
    public function subscription()
    {
        $allrecord=Subscription::get();
        return view('backend.messages.subscription',compact('allrecord'));
    }
}
