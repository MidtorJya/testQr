<?php

namespace App\Http\Controllers;

use App\Models\Ayat;
use App\Models\Surah;
use App\Models\Trans;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class SearchController
{

        public function __invoke(Request $request)
        {
        
           $term = $request->input('term');
            //$surahs = Surah::first();

            //$results = Surah::all();
           
             $results =Search::addMany([
               [Ayat::class, 'trans'],
               [Surah::class, 'ayat'],
               //[Trans::class, 'text']
             ])  ;

             dd($results);
            // dd(class_basename($results));
         //->paginate(10);
            // // ->get($request->get(key:'term'))
           // ->beginWithWildcard()
         //   ->paginate()
          // ->get($term);

             // dd($results);
    
            return view('components.surah', [
                'results' => $results,
                'term'    => $term,
               // 'surahs' => $surahs,
            ]);
        }
    
}