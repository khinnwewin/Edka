<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\SurveyRequest;
use App\Model\Survey;
Use Alert;
use Redirect;
class SurveyController extends Controller
{
    public function survey(Request $request)
        {

        $Survey = new Survey;

        $Survey->name = $request->name;
        $Survey->phone = $request->phone;
        $Survey->company = $request->company;
        $Survey->designation = $request->designation;
        $Survey->code = $this->generateUniqueNumber();
        $Survey->save();
       
         Alert::success('Success', 'Survey Successfully');
       
          return redirect(route('frontend.code',[$Survey->id]));
    }
        public function generateUniqueNumber()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Survey::where("code", "=", $code)->first());
  
         return $code;
    }

  public function code($id)
    {
        
        // dd($id);
        $surveies = Survey::find($id);
        return view('frontend.code',compact('surveies'));
    }
    // public function survey(SurveyRequest $request)
    // {
        
    //     $form = $request->all();
    //    // dd($form);
    //       Survey::create($form);
    //     Alert::success('Success', 'Survey Successfully');
    //     return view('frontend.survey');
    //     // return redirect(route('survey'));
    // }
}