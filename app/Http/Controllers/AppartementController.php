<?php

namespace App\Http\Controllers;
use App\Offer;

use App\Appartement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $arrrr1 = array();
        $arrrr2 = array();
        $arrrr = array();
        $appartement = Appartement::all();
        foreach ($appartement as $app){
            foreach ($app->offers()->get() as $off){

                             array_push($arrrr1,$off->create_by_user_id);
                             if ($off->create_by_user_id != Auth::id()){
                                 array_push($arrrr2,$app);
                             }
            }
            array_push($arrrr,$app->offers()->get());
        }
        unset($arrrr[0]);
//        dd($arrrr,$arrrr1,$arrrr2);
//        dd($appartement);
        return view('appartement.index')->with('appartements',$arrrr2);
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
        $offer->title = $request->title;
        $offer->address = $request->address;
        $offer->prix =$request->prix;
        $offer->surfface = $request->surfface;
        $offer->offertable_id = $appartement->id;
        $offer->offertable_type = $request->offertable_type;
        $user = User::findOrFail(Auth::id());
        $offer->createByUser()->associate($user);
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
            $offer->title =  $request->title;
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
        $appartement->offers()->delete();
        //delete terre
              $appartement->delete();
              return redirect('/appartement');
    }
}
