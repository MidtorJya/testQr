<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
//use ProtoneMedia\LaravelCrossEloquentSearch\Search;

// class SearchController
// {

//       //   public function __invoke(Request $request)
//       //   {
        
//       //      $term = $request->input('term');
//       //       //$surahs = Surah::first();

//       //       //$results = Surah::all();
           
//       //        $results =Search::addMany([
//       //          [Ayat::class, 'trans'],
//       //          [Surah::class, 'ayat'],
//       //          //[Trans::class, 'text']
//       //        ])  ;

//       //        dd($results);
//       //       // dd(class_basename($results));
//       //    //->paginate(10);
//       //       // // ->get($request->get(key:'term'))
//       //      // ->beginWithWildcard()
//       //    //   ->paginate()
//       //     // ->get($term);

//       //        // dd($results);
    
//       //       return view('components.surah', [
//       //           'results' => $results,
//       //           'term'    => $term,
//       //          // 'surahs' => $surahs,
//       //       ]);
//       //   }
    
// }


class SearchController extends Controller
{
    function search(){

       
        // if( isset($_GET['query']) && strlen($_GET['query']) > 1){

        //     $search_text = $_GET['query'];
        //     $countries = DB::table('country')->where('Name','LIKE','%'.$search_text.'%')->paginate(2);
        //     // $countries->appends($request->all());
        //     return view('search',['countries'=>$countries]);
            
        // }else{
        //      return view('search');
        // }
        return view('search');
       
    }

    function find(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');

           $countries =  DB::table('datasurahs')
           ->join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
           ->join('thais', 'thais.arabic_id', '=', 'arabics.arabic_id')
         
           ->select('datasurahs.th_name','datasurahs.id','arabics.arabic_id', 'arabics.arabic_text','thais.text')
                      ->where('arabics.arabic_text','LIKE','%'.$search_text.'%')
                     //->orWhere('id','<', 114)
                      ->orWhere('thais.text','like','%'.$search_text.'%')
                      ->orWhere('arabics.arabic_id','like','%'.$search_text.'%')
                      ->orWhere('datasurahs.th_name','like','%'.$search_text.'%')
                      ->paginate(10);
                     // return dd($countries);

   //                   $data = Datasurah::join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
   //  ->join('thais', 'thais.arabic_id', '=', 'arabics.arabic_id')
   //  ->get([ 'datasurahs.th_name','arabics.arabic_text', 'thais.text']);


                     
            return view('search',['countries'=>$countries]);

                //   $countries =  Datasurah::whereHas('tran', function($query) use($search_text) {
          
        //     $query      ->where('text','LIKE','%'.$search_text.'%');})
        //              //->orWhere('id','<', 114)
        //               ->orWhere('th_name','like','%'.$search_text.'%')->get();
        //              // ->orWhere('arabics.arabic_id','like','%'.$search_text.'%')
        //               //->paginate(10);
        //              //return dd($countries);
        //     return view('search',['countries'=>$countries]);
//             $teachers = Teacher::whereHas('student', function($query) use($term) {
//     $query->where('student_name', 'like', '%'.$term.'%');
// })->orWhere('teacher_name','LIKE','%'.$term.'%')->orderBy($order, 'asc')->get();


// $name = Input::get('q');
// // or this option  
// //$name = $request->input('q');

// $products = DB::table('products')           
//     ->select('products.*')              
//     ->where('products.name' , 'like', '%'.$name.'%') //Error in this line   

// return view('product',compact('products'));
//     }
}
}

