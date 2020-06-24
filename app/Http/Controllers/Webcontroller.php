<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function list()
    {
        $survey = Survey::all();
        return view("list", [
            "survey" => $survey]);
    }

    public function new()
    {
        return view("new");
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "telephone" => "required",
            "feedback" => "required",
        ]);
        try {
            Survey::create([
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone"),
                "feedback" => $request->get("feedback"),
            ]);

        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-information");
    }
}
