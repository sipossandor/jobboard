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
        /* Georgie-féle megoldás:

        Manager::validate($request);

        $created_at = date("Y-m-d H:i:s");
        $managers = new Manager();
        AdminManagersController::setCommonFields($managers, $request);
        $managers->setCreatedAt($created_at);
        $managers->setUpdatedAt($created_at);

        $managers->save(); */

        // Könyv 1. megoldás:
        $request->validate([
            "name" => "required",
            "post" => "required",
            'photo' => 'photo',
        ]);

        $newManager = new Manager();
        $newManager->setName($request->input('name'));
        $newManager->setPost($request->input('post'));
        $newManager->setPhoto("game.png");

        /*
        $newManager->save();

        return back();
        */

        /* Könyv 2. megoldás:

        $creationData = $request->only(["name","post","photo"]);
        $creationData["photo"] = "game.png";
        Manager::create($creationData); */

        if ($request->hasFile('image')) {
            $photoName = $newManager->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $photoName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $newManager->setPhoto($photoName);

            $newManager->save();
        }

        return redirect()->route('admin.managers.index');
    }

}
