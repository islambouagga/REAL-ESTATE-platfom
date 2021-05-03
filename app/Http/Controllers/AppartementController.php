<?php

namespace App\Http\Controllers;
use App\Offer;

use App\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appartement = Appartement::all();
        return view('appartement.index')->with('appartements',$appartement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appartement.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, appartement $appartement ,Offer $offer)
    {
//        dd($request->all());
        $appartement->etage =$request->etage;
        $appartement->chombre = $request->chombre;
        $appartement->salledebain = $request->salledebain;
        $appartement->balcon = $request->balcon;
        $appartement->toilettes = $request->toilettes;
        $appartement->cuisine = $request->cuisine;
        $appartement->save();
        $offer->address = $request->address;
        $offer->prix =$request->prix;
        $offer->surfface = $request->surfface;
        $offer->offertable_id = $appartement->id;
        $offer->offertable_type = $request->offertable_type;
        $offer->save();

        return redirect('/appartement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function show(Appartement $appartement)
    {
        //
        return  view('appartement.show')->with('appartement',$appartement);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartement $appartement)
    {
        //
        return view('appartement.edit')->with('appartement',$appartement);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartement $appartement)
    {
//        dd($request->all());
        $appartement->etage =$request->etage;
        $appartement->chombre = $request->chombre;
        $appartement->salledebain = $request->salledebain;
        $appartement->balcon = $request->balcon;
        $appartement->toilettes = $request->toilettes;
        $appartement->cuisine = $request->cuisine;
        $appartement->save();
        foreach ($appartement->offers()->get() as $offer ){{}
            $offer->prix =  $request->prix;
            $offer->surfface =  $request->surfface;
            $offer->address =  $request->address;
          $offer->save();
           }
           return  view('appartement.show')->with('appartement',$appartement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartement $appartement)
    {
        //
        $terre->offers()->delete();
        //delete terre
              $appartement->delete();
              return redirect('/appartement');
    }
}
