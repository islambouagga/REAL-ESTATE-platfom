<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $offer =  offer::all();


        return view('offer.index')->with('offers',$offer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('offer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,offer $offer)
    {
//        dd($request->all());


            $offer->address = $request->address;
            $offer->prix =$request->prix;
            $offer->surfface = $request->surfface;

            // hado wlaw mech lazem khterch dethom 9ader ykono null mais lazem n3mrhom fi terre/villa/appertement

//            $offer->offertable_id = $request->offertable_id;
//            $offer->offertable_type = $request->offertable_type;


            $offer->save();

            return redirect('/offer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
        return view ('offer.show')->with('offer' ,$offer);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
        return view ('offer.edit')->with('offer' ,$offer);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
        $offer->update($request->all());
        return view('offer.show')->with('offer',$offer);


        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
        $offer->delete();
        return redirect('/offer');
    }
}
