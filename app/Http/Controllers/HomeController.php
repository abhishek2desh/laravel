<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function code()
    {
        return view('embedcode');
    }
     public function test()
    {
        return view('test');
    }
     public function contact()
    {
        return View::make('contact');
    }
     public function share()
    {
        return view('facebookSharer');
    }
     
     public function preview()
    {
        return view('preview');
    }
    
     public function preview2()
    {
        return view('preview2');
    }
      public function write()
    {
        return view('write2file');
    }


    
}
