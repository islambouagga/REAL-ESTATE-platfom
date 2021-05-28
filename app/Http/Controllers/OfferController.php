<?php

namespace App\Http\Controllers;

use App\Offer;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $offer = offer::with('createByUser')->get();

//dd($offer);
        return view('offer.index')->with('offers', $offer);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, offer $offer)
    {
//        dd(User::findOrFail(Auth::id()));
        $offer->address = $request->address;
        $offer->prix = $request->prix;
        $offer->surfface = $request->surfface;
//        $offer->user_id =  Auth::id();
        $user = User::findOrFail(Auth::id());
        $offer->createByUser()->associate($user);
//        dd($offer->createByUser()->get());
        $offer->save();
        return redirect('/offer');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
//        dd($offer->createByUser()->get());
        $user=$offer->createByUser();
//        dd($user);
        return view('offer.show')->with('offer', $offer);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
        return view('offer.edit')->with('offer', $offer);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
        $offer->update($request->all());
        return view('offer.show')->with('offer', $offer);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
        $offer->delete();
        return redirect('/offer');
    }


    public function accepter(Offer $offer)
    {

        $offer->statu = 'accepter';
        $offer->save();

        return redirect('/offer');

    }

    public function rejeter(Offer $offer)
    {

        $offer->statu = 'rejeter';
        $offer->save();

        return redirect('/offer');

    }


}
