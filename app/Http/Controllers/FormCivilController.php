<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formCivil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createformCivil(Request $request)
    {
        $form = new Form;
        $form->prenom=$request->input('prenom');
        $form->nom=$request->input('nom');
        $form->email=$request->input('email'); 
        $form->date=$request->input('date');     
        $form->pays=$request->input('pays'); 
        $form->national=$request->input('national'); 
        $form->adresse=$request->input('adresse'); 
        $form->tel=$request->input('tel'); 
        $form->statut=$request->input('statut'); 
        $form->numpole=$request->input('numpole'); 
        $form->secu=$request->input('secu'); 
        $form->save();
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
