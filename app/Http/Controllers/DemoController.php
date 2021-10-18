<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;

class DemoController extends Controller
{
    
    public function index()
    {
        $datas = Datasurah::all();
          
       //return view('test2.t', [
         //   'datas' => $datas
        //]);
            return view('demo.home',compact('datas'));
        
    }
    public function detail()
    {
        
            return view('demo.detail');
        
    }
    public function tafseer()
    {
        
            return view('demo.tafseerhome');
        
    }
}
