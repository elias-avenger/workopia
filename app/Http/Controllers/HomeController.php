<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View 
    {
        $jobs = Job::latest()->limit(6)->get();
        return view('pages.index')->with('jobs', $jobs);
    }
}
