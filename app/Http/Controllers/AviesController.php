<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use App\Avie;

class AviesController extends Controller
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
        $matieres = Matiere::all();
        return view('enseignants.avies.add')->with('matieres',$matieres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $avie = new Avie();
        $avie->idmatiere = $request->input('idmatiere');
        $avie->type = $request->input('type');
        $avie->salle = $request->input('salle');
        $avie->time = $request->input('time');
        $avie->date = $request->input('date');
        $avie->iduser = auth()->user()->id;
        $avie->save();
        return redirect("/home");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $support = Avie::find($id);
        $support->delete();
        if (auth()->user()->roles == "Admin" ){
            return redirect('/');
        }else{
            return redirect('/enseignants/avies');
        }
    }
    public function aviesenseignants(){
        $avies = Avie::where('iduser',auth()->user()->id)->get();
        return view('enseignants.avies.liste')->with('avies',$avies);
    }
}