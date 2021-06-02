<?php

namespace App\Http\Controllers;

use App\Offer;
use App\User;
use App\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villa =  villa::all();
        return view('villa.index')->with('villas',$villa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('villa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Offer $offer , Villa $villa)
    {
//        dd($request->all());
        $villa->etage =$request->etage;
        $villa->chombre = $request->chombre;
        $villa->salledebain = $request->salledebain;
        $villa->balcon = $request->balcon;
        $villa->toilettes = $request->toilettes;
        $villa->cuisine = $request->cuisine;
        $villa->garage = $request->garage;
        $villa->save();

        $offer->title = $request->title;
        $offer->address = $request->address;
        $offer->prix =$request->prix;
        $offer->surfface = $request->surfface;
        $offer->offertable_id = $villa->id;
        $offer->offertable_type = $request->offertable_type;

        if ($request->hasFile('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time().'.'.$ext;
            $file->move('uploads/offers',$filename);
            $offer->image = $filename;
        }else{
            return $request ;
            $offer->image = '';
        }
        $user = User::findOrFail(Auth::id());
        $offer->createByUser()->associate($user);
        $offer->save();

        return redirect('/villa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function show(Villa $villa)
    {
        return  view('villa.show')->with('villa',$villa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function edit(Villa $villa)
    {
        return view('villa.edit')->with('villa',$villa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villa $villa)
    {

        $villa->etage =$request->etage;
        $villa->chombre = $request->chombre;
        $villa->salledebain = $request->salledebain;
        $villa->balcon = $request->balcon;
        $villa->toilettes = $request->toilettes;
        $villa->cuisine = $request->cuisine;
        $villa->garage = $request->garage;
        $villa->save();

        foreach ($villa->offers()->get() as $offer ){
            $offer->title = $request->title;
            $offer->address = $request->address;
            $offer->prix =$request->prix;
            $offer->surfface = $request->surfface;
           $offer->save();
           }
           return  view('villa.show')->with('villa',$villa);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villa $villa)
    {
        $villa->offers()->delete();

        //delete villa
        $villa->delete();

        return redirect('/villa');
    }
}
