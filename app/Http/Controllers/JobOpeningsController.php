<?php
namespace App\Http\Controllers;

use App\Models\JobOpening;
use Illuminate\Http\Request;

class JobOpeningsController extends Controller
{
    // public static $job_openings = [
    //    ["id"=>"1", "title"=>"Java Developer", "description"=>"Best JavaEE Engineer", "image" => "game.png", "salary"=>"1000000"],
    //    ["id"=>"2", "title"=>"Python Developer", "description"=>"Best Python Engineer", "image" => "game.png", "salary"=>"2000000"],
    //    ["id"=>"3", "title"=>"C++ Developer", "description"=>"Best Software Engineer", "image" => "game.png", "salary"=>"3000000"]
    // ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Job Openings";
        $viewData["subtitle"] = "List of job openings";
        // $viewData["job_openings"] = JobOpeningsController::$job_openings;
        $viewData["jobopenings"] = JobOpening::all();

        return view('job_openings.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        // $job_opening = JobOpeningsController::$job_openings[$id-1];
        $jobopenings = JobOpening::findOrFail($id);
        $viewData["title"] = $jobopenings["title"]." - Job Openings";
        // $viewData["title"] = $job_opening->getName()." - Job Openings";
        // $viewData["subtitle"] = $job_opening["title"]." - Job Opening Detail";
        $viewData["subtitle"] = $jobopenings->getJobTitle()." - Job Opening Detail";
        $viewData["jobopenings"] = $jobopenings;

        return view('job_openings.show')->with("viewData", $viewData);
    }
}
