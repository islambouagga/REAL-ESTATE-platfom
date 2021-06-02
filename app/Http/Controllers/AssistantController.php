<?php

namespace App\Http\Controllers;

use App\Assistant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AssistantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistants =  Assistant::all();
        return view('assistant.index')->with('assistants',$assistants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assistant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Assistant $assistant)
    {

  $assistant->address =  $request->address;
  $assistant->tel =  $request->tel ;
  $assistant->save();
         User::create([
            'name' => $request['name'],
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'email' => $request['email'],
            'usertable_id' => $assistant->id,
            'usertable_type' => $request['usertable_type'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/assistant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function show(Assistant $assistant)
    {
        return  view('assistant.show')->with('assistant',$assistant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistant $assistant)
    {
        return view('assistant.edit')->with('assistant',$assistant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assistant $assistant)
    {
//        dd($request->all());
        $assistant->address = $request->address;
        $assistant->tel = $request->tel;
        $assistant->save();

        foreach ($assistant->users()->get() as $user ){
         $user->name =  $request->name;
         $user->nom =  $request->nom;
         $user->prenom =  $request->prenom;
         $user->email =  $request->email;
         $user->password =  Hash::make($request->password);
        $user->save();
        }

        return  view('assistant.show')->with('assistant',$assistant);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assistant $assistant)
    {
//delete user of assisant
$assistant->users()->delete();

//delete assistant
$assistant->delete();

return redirect('/assistant');
    }
}
