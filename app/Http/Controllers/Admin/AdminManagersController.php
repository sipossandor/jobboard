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
        $viewData["manager"] = Manager::all();

        return view('admin.managers.index')->with("viewData", $viewData);
    }

    /* public function create()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Managers - Add New Member";

        return view('admin.managers.create')->with("viewData", $viewData);
    }*/

    public function store(Request $request)
    {
        Manager::validate($request);

        $created_at = date("Y-m-d H:i:s");
        $manager = new Manager();
        AdminManagersController::setCommonFields($manager, $request);
        $manager->setCreatedAt($created_at);
        $manager->setUpdatedAt($created_at);

        $manager->save();

        // Könyv 1. megoldás:
        /* $request->validate([
            "name" => "required",
            "post" => "required",
            'photo' => 'photo',
        ]);

        Manager::validate($request);

        $manager = new Manager();
        $manager->setName($request->input('name'));
        $manager->setPost($request->input('post'));
        $manager->setPhoto("game.png");

        Könyv 2. megoldás:

        $creationData = $request->only(["name","post","photo"]);
        $creationData["photo"] = "game.png";
        Manager::create($creationData); */

        if ($request->hasFile('image')) {
            $photoName = $manager->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $photoName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $manager->setPhoto($photoName);
            $manager->save();
        }

        return redirect()->route('admin.managers.index');
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Management Members - Board of Management";
        $viewData["manager"] = Manager::findOrFail($id);

        return view('admin.managers.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Manager::validate($request);

        $manager = Manager::findOrFail($id);

        AdminManagersController::setCommonFields($manager, $request);
        $manager->setUpdatedAt(date("Y-m-d H:i:s"));

        $manager->save();

        return redirect()->route('admin.managers.index');
    }

    public function delete($id)
    {
        $manager = Manager::findOrFail($id);
        $manager->setDeletedAt(date("Y-m-d H:i:s"));

        $manager->save();

        return back();
    }

    private function setCommonFields($manager, $request)
    {
        $manager->setName($request->input('name'));
        $manager->setPost($request->input('post'));
        $manager->setPhoto($request->input('photo'));
    }

}
