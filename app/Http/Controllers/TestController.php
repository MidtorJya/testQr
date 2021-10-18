<?php

namespace App\Http\Controllers;

use App\Models\Surah;
use App\Models\Ayat;
use App\Models\Trans;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surahs = Surah::paginate(10);

        return view('test.index', [
            'surahs' => $surahs
        ]);
    }

    public function ayat($id)
    {
        $ayats = Surah::with('ayat.trans')->find($id);
       // ->firstOrFail();

       // $plucked = $ayats->pluck('ayat.text', 'trans.text');
        
        //dd($ayats->toArray());
       // return dd($ayats);
      
       //return view('test.detail', [
        //dd($ayats->toArray());
        //'ayats' => $ayats]);
       
      return view('test.detail',compact('ayats'));
        //    'ayats' => $ayats
        //]);
    }


    public function home()
    {
      

        return view('quran.home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
