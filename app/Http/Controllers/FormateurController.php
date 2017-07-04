<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Role;
use App\Role_user;
use App\Form;

class FormateurController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function listFormateurs(Request $request)
  {

    $roleId = 3;
    $formateurs = User::whereHas('roles', function ($q) use ($roleId) {
      $q->where('role_id', $roleId);
    })->get();

    return view('listFormateurs', ['formateurs'=>$formateurs]);
  }

  function ajoutFormateur(Request $request)
  {

    $user = new User;
    $user->lastName = $request->input('lastName');
    $user->firstName = $request->input('firstName');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));

    $role = $user->roles();
    dd($role);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('listFormateurs');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function addFormateur()
  {
    return view('formFormateur');
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
  public function store(Request $request)
  {
    $this->validate($request, [
       'lastName' => 'required|max:255',
       'firstName' => 'required',
       'email' => 'required|string|email|max:255|unique:users',
       'password' => 'required|string|min:6|confirmed',
   ]);
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
