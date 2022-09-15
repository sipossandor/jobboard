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

    public function store(Request $request)
    {
        /* $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "salary" => "required|numeric|gt:0",
            'image' => 'image',
        ]);

        $creationData = $request->only(["name","description","price"]);
        $creationData["image"] = "game.png";
        Product::create($creationData);

        return back(); */

        JobOpening::validate($request);

        $created_at = date("Y-m-d H:i:s");
        $jobOpening = new JobOpening();
        AdminJobOpeningsController::setCommonFields($jobOpening, $request);
        $jobOpening->setCreatedAt($created_at);
        $jobOpening->setUpdatedAt($created_at);

        $jobOpening->save();

        return redirect()->route('admin.job_openings.index');
    }
}
