<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Users";
        $viewData["users"] = User::all();

        return view('admin.users.index')->with("viewData", $viewData);
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit User";
        $viewData["user"] = User::findOrFail($id);

        return view('admin.users.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        User::validate($request);

        $user = User::findOrFail($id);

        AdminUsersController::setCommonFields($user, $request);
        $user->setUpdatedAt(date("Y-m-d H:i:s"));

        $user->save();

        return redirect()->route('admin.users.index');
    }

    private function setCommonFields($user, $request)
    {
        $user->setName($request->input('name'));
        $user->setEmail($request->input('email'));
        $user->setRole($request->input('role'));

    }
}

