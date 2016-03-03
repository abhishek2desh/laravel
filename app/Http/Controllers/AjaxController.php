<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use View;

use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function ajaxResponse(Request $request) {
         if ($request->ajax())
         {  $hello = Input::get('body');
            $hello2=Input::get("body2");
            $body = $request->input('body');
            $response=Input::get('body');
            //$content = $request->getContent();

          
            
            return view("json");
            //return response()->json(['response'=>$response,'body'=>$body,'body2'=>$hello2]);
         }

        if ($request->isMethod('post')){  
            
          //$body = $request->input('body');
          //return view('json');
          //  return response()->json(['value'=>Input::get('body')]); 
        }

        return response()->json(['response' => 'failed']);
    }
}

   

