<?php

namespace App\Http\Controllers;

use App\Terre;
use Illuminate\Http\Request;

class TerreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $terre =  terre::all();
        return view('terre.index')->with('terres',$terres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('terre.create');

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
        Offer::create([
            'address' => $request['address'],
            'prix' => $request['prix'],
            'surfface' => $request['surfface'],
          'offertable_id' => $terre->id,
            'offertable_type' => $request['offertable_type'],
        
        ]);
        return redirect('/terre');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Terre  $terre
     * @return \Illuminate\Http\Response
     */
    public function show(Terre $terre)
    {
        //
        return  view('terre.show')->with('terre',$terre);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Terre  $terre
     * @return \Illuminate\Http\Response
     */
    public function edit(Terre $terre)
    {
        //
        return view('terre.edit')->with('terre',$terre);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terre  $terre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terre $terre)
    {
        //
        foreach ($terre->offers()->get() as $offer ){
            $offer->prix =  $request->prix;
            $offer->surfface =  $request->surfface;
            $offer->adresse =  $request->adresse;
        
           $offer->save();
           }
           return  view('terre.show')->with('terre',$terre);
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Terre  $terre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terre $terre)
    {
        //
        $terre->offers()->delete();

        //delete terre
        $terre->delete();
        
        return redirect('/terre');  
    }
}
