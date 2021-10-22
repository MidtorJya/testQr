<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Country;

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
    public function join()
    {
    $data = Datasurah::join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
    ->join('thais', 'thais.arabic_id', '=', 'arabics.arabic_id')
    ->get([ 'datasurahs.th_name','arabics.arabic_text', 'thais.text']);

//     select `arabics`.`text`, `datasurahs`.`th_name`, `thais`.`text`
 //    from `arabics` inner join  `datasurahs` on `datasurahs`.`id` = `arabics`.`arabic_id`
//      inner join `thais` on `thais`.`arabic_id` = `datasurahs`.`id`


//     $data = Country::join('state', 'state.country_id', '=', 'country.country_id')
//     ->join('city', 'city.state_id', '=', 'state.state_id')
//     ->get(['country.country_name', 'state.state_name', 'city.city_name']);

//select  `datasurahs`.`th_name`,  `arabics`.`text`,`thais`.`text`
//  from `datasurahs` inner join `arabics`  on  `arabics`.`datasurah_id` =  `datasurahs`.`id`
//  inner join `thais` on `thais`.`arabic_id` = `arabics`.`arabic_id`


    //select `country`.`country_name`, `state`.`state_name`, `city`.`city_name`
    // from `country` inner join `state` on `state`.`country_id` = `country`.`country_id` 
    //inner join `city` on `city`.`state_id` = `state`.`state_id`
return view('join_table',['data'=>$data]);
}
}
