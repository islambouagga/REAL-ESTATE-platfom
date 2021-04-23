<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $client =  Client::all();

        return view('client.index')->with('client',$client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('client.create');
    }     


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Client $client)
    {
        $client->address =  $request->address;
        $client->tel =  $request->tel;
        $client->save();
      
            User::create([
                'name' => $request['name'],
                'nom' => $request['nom'],
                'prenom' => $request['prenom'],
                'email' => $request['email'],
                'usertable_id' => $client->id,
                'usertable_type' => $request['usertable_type'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect('/client');
        }
    
     

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view ('client.show')->with('Client' ,$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view ('client.edit')->with('client' ,$client);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {

        $assistant->address = $request->address;
        $assistant->tel = $request->tel;
        $assistant->save();
        foreach ($client->users()->get() as $user ){
            $user->name =  $request->name;
            $user->nom =  $request->nom;
            $user->prenom =  $request->prenom;
            $user->email =  $request->email;
            $user->password =  Hash::make($request->password);
           $user->save();
           }
   
           return  view('client.show')->with('client',$client);
   
         
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {//delete user of assisant
$client->users()->delete();

//delete assistant
$client->delete();

return redirect('/client');
    }}

        //
    

