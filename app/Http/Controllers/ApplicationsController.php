<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationsController
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "My Applications";
        $viewData["application"] = Application::all();

        return view('applications.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        echo "<script>console.log('job_id: " . $request->input('job_id') . "' );</script>";
        echo "<script>console.log('job_title: " . $request->input('job_title') . "' );</script>";
        echo "<script>console.log('user_name: " . $request->input('user_name') . "' );</script>";
        echo "<script>console.log('user_id: " . $request->input('user_id') . "' );</script>";
        echo "<script>console.log('resume: " . $request->input('resume') . "' );</script>";

        Application::validate($request);
        $created_at = date("Y-m-d H:i:s");
        $application = new Application();
        ApplicationsController::setCommonFields($application, $request);
        $application ->setCreatedAt($created_at);
        $application ->setUpdatedAt($created_at);

        $application->save();

        if ($request->hasFile('resume')) {

            $resume = $application->getId() . "." . $request->file('resume')->extension();
            Storage::disk('public')->put(
                $resume,
                file_get_contents($request->file('resume')->getRealPath())
            );

            $application->setResume($resume);
            $application->save();
        }

        return redirect()->route('job_openings.index');
    }

    private function setCommonFields($application, $request)
    {
        $application->setJobId($request->input('job_id'));
        $application->setUserId($request->input('user_id'));
        $application->setResume($request->input('resume'));
        $application->setLinkedInUrl($request->input('linkedin_url'));
    }
}
