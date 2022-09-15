<?php

namespace App\Http\Controllers\Admin;

use App\Models\Manager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminManagersController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Managers - Board of Management";
        $viewData["managers"] = Manager::all();

        return view('admin.managers.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Manager::validate($request);

        $created_at = date("Y-m-d H:i:s");
        $managers = new Manager();
        AdminManagersController::setCommonFields($managers, $request);
        $managers->setCreatedAt($created_at);
        $managers->setUpdatedAt($created_at);

        $managers->save();

        if ($request->hasFile('image')) {
            $imageName = $managers->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $managers->setPhoto($imageName);
            $managers->save();
        }

        return redirect()->route('admin.managers.index');
    }

}
