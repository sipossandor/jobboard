<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "User";
        $viewData["subtitle"] = "User's Profile";
        $viewData["user"] = Auth::User();

        return view('user.index')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        User::validate($request);

        $user = User::findOrFail($id);

        UserController::setCommonFields($user, $request);
        $user->setUpdatedAt(date("Y-m-d H:i:s"));

        $user->save();

        return redirect()->route('user.index');
    }

    private function setCommonFields($user, $request)
    {
        $user->setName($request->input('name'));
        $user->setEmail($request->input('email'));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect()->route('home.index');
    }
}
