<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function surveyStudent()
    {
        return view( "new");
    }

    public function postSurveyStudent(Request $request) {
        $survey = new Survey();
        $survey->name = $request->name;
        $survey->email = $request->email;
        $survey->telephone = $request->telephone;
        $survey->feedback = $request->feedback;
        $survey->save();
        return response()->json(['success'=>'Form is successfully submitted!']);

    }
}
