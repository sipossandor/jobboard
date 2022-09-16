<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagersController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Management";
        $viewData["subtitle"] = "Board of Management";
        $viewData["manager"] = Manager::all();

        return view('managers.index')->with("viewData", $viewData);
    }
}
