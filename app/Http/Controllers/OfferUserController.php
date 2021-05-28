<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Offer_User;
use App\User;
use Illuminate\Http\Request;

class OfferUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,Offer_User $offer_User)
    {
//        dd($request->all());
        $offer =  Offer::findOrFail($request->offerid);
//        $offer_User->create_by_user_id = $request->userid;
//        $offer_User->buy_By_User_offer_id = $request->offerid;
//        $offer_User->save();
        $user =  User::findOrFail($request->userid);
//        dd($offer,$user);
        $user->buyOffers()->attach($request->offerid);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer_User  $offer_User
     * @return \Illuminate\Http\Response
     */
    public function show(Offer_User $offer_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer_User  $offer_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer_User $offer_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer_User  $offer_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer_User $offer_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer_User  $offer_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer_User $offer_User)
    {
        //
    }
}
