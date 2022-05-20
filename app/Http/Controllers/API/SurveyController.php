<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Survey;
use Validator;
class SurveyController extends Controller
{
   public function index()
    {
        $surveies = Survey::all();
        return response()->json($surveies);
    }
      public function store(Request $request)
    {
        $Survey = new Survey;

        $Survey->name = $request->name;
        $Survey->phone = $request->phone;
        $Survey->company = $request->company;
        $Survey->designation = $request->designation;
        $Survey->code = $this->generateUniqueNumber();
        $Survey->save();

        
        return response()->json([
            'message' => 'Great success! New Survey created',
            'survey' => $Survey
        ]);
    }
      public function generateUniqueNumber()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Survey::where("code", "=", $code)->first());
  
         return $code;
    }
  


     public function show(Survey $survey)
    {
        return $survey;
    }

    public function update(Request $request,Survey $survey)
    {
        $request->validate([
           'name'       => 'nullable',
           'phone'       => 'nullable',
           'company'       => 'nullable',
           'designation'       => 'nullable',
           'code'       => 'nullable'

        ]);

        $survey->update($request->all());

        return response()->json([
            'message' => 'Great success! survey updated',
            'survey' => $survey
        ]);
    }
    
    public function destroy(Survey $survey)
    {
        $survey->delete();

        return response()->json([
            'message' => 'Successfully deleted survey!'
        ]);

    }
}
