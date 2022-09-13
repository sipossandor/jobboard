<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Career Page";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Company Name";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page our company...";
        $viewData["author"] = "Developed by: Nóra and Sándor";
        return view('home.about')->with("viewData", $viewData);
    }
}
