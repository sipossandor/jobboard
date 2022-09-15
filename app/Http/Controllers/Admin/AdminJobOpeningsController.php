<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobOpening;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminJobOpeningsController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Job Openings - Job Board";
        $viewData["job_openings"] = JobOpening::all();

        return view('admin.job_openings.index')->with("viewData", $viewData);
    }
}
