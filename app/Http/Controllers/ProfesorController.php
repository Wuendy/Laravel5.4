<?php

namespace App\Http\Controllers;


use App\Materia;
use App\Profesor;
use Illuminate\Http\Request;
use App\Http\Requests\Profesorrequest;
use Illuminate\Support\Facades\Input;


class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $profesor=profesor::all();
        return view('profesorindex',compact('profesor')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia=Materia::all();
        return view('profesor',compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Profesorrequest $request)
    {
   
    $user = new Profesor;
    $user->nombre= Input::get("nombre");
    $user->apellido = Input::get("apellido");
    $user->cedula= Input::get("cedula");
    $user->tlf = Input::get("tlf");
    $user->email= Input::get("email");
    $user->id_mat= Input::get("id_mat");
    
   
    $user->save();
        return redirect()->route('profesor.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $profesor=Profesor::find($id);
        return  view('profesorindex',compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $profesor = \App\Profesor::find($id);
    $materia=Materia::all();
        return view('profesoredit',compact('profesor','materia','id'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Profesorrequest $request, $id)
    {
      
        Profesor::find($id)->update($request->all());
        return redirect()->route('profesor.index')->with('success','Registro actualizado satisfactoriamente');
 
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $profesor = Profesor::find($id);
    $profesor->delete();
        return back();
    }
    }

