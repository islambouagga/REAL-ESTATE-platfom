<?php

namespace App\Http\Controllers;

use App\Offer;
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
        return view('terre.index')->with('terres',$terre);
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
    public function store(Request $request,Offer $offer)
    {
        $terre =  Terre::create();
        $offer->address = $request->address;
        $offer->prix =$request->prix;
        $offer->surfface = $request->surfface;
        $offer->offertable_id = $terre->id;
        $offer->offertable_type = $request->offertable_type;
        $offer->save();
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
//        dd($request->all());


        // khawaaalaaaaa rakziiiiiiiiiiii
        foreach ($terre->offers()->get() as $offer ){
            $offer->prix =  $request->prix;
            $offer->surfface =  $request->surfface;
            $offer->address =  $request->address;

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
