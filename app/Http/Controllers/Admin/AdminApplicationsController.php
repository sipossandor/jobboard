<?php

namespace App\Http\Controllers\Admin;

use App\Models\Application;

class AdminApplicationsController
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Applications";
        $viewData["applications"] = Application::all();

        return view('admin.applications.index')->with("viewData", $viewData);
    }
}
