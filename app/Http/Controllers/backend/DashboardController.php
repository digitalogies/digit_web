<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $service_count=Services::count();
        $contact_count=ContactUs::count();
        $job_count=Job::count();
        $portfolio_count=Portfolio::count();
        return view('backend.dashboard.dashboard',compact('service_count','contact_count','job_count','portfolio_count'));
    }
}
