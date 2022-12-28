<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\{
    Career,
    Category,
    ContactUs,
    Job,
    Portfolio,
    Review,
    Services,
    Subscription,
    Team,
};
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $services=Services::get();
        $teams=Team::get();
        $reviews=Review::get();
        $portfolios=Portfolio::limit(8)->latest()->get();
        return view('frontend.pages.index',compact('services','portfolios','teams','reviews'));
    }

    public function about_us()
    {
        $teams=Team::get();
        $reviews=Review::get();
        return view('frontend.pages.About_Us',compact('teams','reviews'));
    }

    public function career()
    {
        $careers=Career::get();
        return view('frontend.pages.Career',compact('careers'));
    }

    public function career_detail($slug)
    {
        $career=Career::where('slug',$slug)->first();
        return view('frontend.pages.Career_detail',compact('career'));
    }

    public function job(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'number'=>'required',
            'resume'=>'required|mimes:pdf|max:10000',
            'cover_letter'=>'mimes:pdf|max:10000',
        ],
        [
            'first_name.required'=>'The first name is required',
            'last_name.required'=>'The last name is required',
            'email.required'=>'The email is required',
            'number.required'=>'The number is required',
            'resume.required'=>'Resume is required',
        ]);
        $job=new Job();
        $job->career_name=$request->career_name;
        $job->applicant_name=$request->first_name;
        $job->applicant_last_name=$request->last_name;
        $job->applicant_email=$request->email;
        $job->applicant_phone=$request->number;
        $job->applicant_linkedin_url=$request->linkedin_url;
        $job->applicant_portfolio_url=$request->portfolio_url;
        $job->applicant_message=$request->message;
        if($request->file('resume'))
        {
            $resume = time().rand(2,9999).'.'.$request->file('resume')->extension();
            $move = $request->file('resume')->move(public_path().'/assets/frontend/job/',$resume);
            $job->applicant_cv = $resume;
        }
        if($request->file('cover_letter'))
        {
            $lettername = time().rand(2,9999).'.'.$request->file('cover_letter')->extension();
            $move = $request->file('cover_letter')->move(public_path().'/assets/frontend/job/',$lettername);
            $job->applicant_cover_letter = $lettername;
        }
        $job->save();
        return back()->withSuccess('Your Application has been submitted!');
    }

    public function contact_us()
    {
        return view('frontend.pages.Contact_Us');
    }

    public function message(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $name=$request->name;
        $messages=$request->message;
        $email=$request->email;
        $service_name=$request->service;
        $add=new ContactUs();
        $add->name=$name;
        $add->email=$email;
        $add->message=$messages;
        $add->service_name=$service_name;
        $add->save();
        \Mail::send('email.feedback',compact('name','messages','service_name'),function($message) use ($email,$service_name){
            $message->from($email);
            if($service_name != null)
            {
                $message->to(env('MAIL_USERNAME'), env('APP_NAME'))->subject('User Quote');
            }
            else
            {
                $message->to(env('MAIL_USERNAME'), env('APP_NAME'))->subject('User Feed Back');
            }

        });
        return back()->withSuccess('Your message has been submitted!');
    }

    public function subscription(Request $request)
    {
        $request->validate([
            'subscription_email'=>'required|email',
        ]);
        $email=$request->subscription_email;
        $add=new Subscription();
        $add->email=$email;
        $add->save();

        \Mail::send('email.subscription',compact('email'),function($message) use ($email){
            $message->from($email);
            $message->to(env('MAIL_USERNAME'), env('APP_NAME'))->subject('User subscription');
        });
        return back()->withSuccess('Your subscription has been submitted!');
    }

    public function portfolio()
    {
        $reviews=Review::get();
        $services = Services::with('get_portfolio')->get();
        return view('frontend.pages.Portfolio',compact('services','reviews'));
    }

    public function portfolio_detail($slug)
    {
        $reviews=Review::get();
        $portfolios = Portfolio::with('get_services')->where('slug',$slug)->first();
        return view('frontend.pages.Portfolio_detail',compact('portfolios','reviews'));
    }

    public function service()
    {
        $services=Services::get();
        return view('frontend.pages.Services',compact('services'));
    }

    public function detail_service($slug)
    {
        $service=Services::where('slug',$slug)->first();
        $services=Services::get();
        $portfolios=Portfolio::where('service_id',$service->id)->get();
        $reviews=Review::get();
        return view('frontend.pages.service_detail',compact('service','services','portfolios','reviews'));
    }

}
