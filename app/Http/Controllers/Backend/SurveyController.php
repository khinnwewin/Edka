<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\SurveyRequest;
use App\Model\Survey;
Use Alert;

class SurveyController extends Controller
{
     public function index(Request $request)
    {
         $surveies = Survey::paginate(25);
         return view('admin.survey.index',compact('surveies'));     
    }
     public function create()
    {
        return view('admin.survey.create');
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
        Alert::success('Success', 'Survey Successfully');
         return redirect(route('survey.index'));
    }

        public function generateUniqueNumber()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Survey::where("code", "=", $code)->first());
  
         return $code;
    }
     public function edit($id)
    {
          $survey = Survey::find($id);
          if(empty($survey)) {
            Alert::error('Error', 'survey Not Found');
            return redirect(route('survey.index'));
          }
          return view('admin.survey.edit', compact('survey'));
    }
     public function update(Request $request, $id)
    {
        $survey = Survey::find($id);
        if(empty($survey)) {
            Alert::error('Error', 'Survey Not Found');
            return redirect(route('admin.survey.index'));
        }
        $survey->update($request->all());
        Alert::success('Success', 'Successfully Updated survey');
        return redirect(route('survey.index'));
    }
     public function destroy($id)
    {
        $survey = Survey::find($id);
        // dd($survey);
        if(empty($survey)) {
            Alert::error('Error', 'Survey Not Found');
            return redirect(route('survey.index'));
        }
        $survey->delete();
        Alert::success('Success', 'Successfully deleted payment');
        return redirect(route('survey.index'));
    }
   

}
