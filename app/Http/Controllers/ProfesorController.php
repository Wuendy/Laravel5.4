<?php

namespace App\Http\Controllers;


use App\Materia;
use App\Profesor;
use Illuminate\Http\Request;

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
    
        $profesor=profesor::orderBy('id')->paginate();
        return view('profesorindex',compact('profesor')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia=Materia::orderBy('id')->paginate(6);
        return view('profesor',compact('materia'));
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
        'nombre' => 'required|string|alpha|max:255',
        'apellido' => 'required|string|alpha|max:255',
        'cedula' => 'required|integer|max:30000000|min:4000000|unique:profesor',
        'tlf' => 'required|unique:profesor',
        'email' => 'required|email|max:255|unique:users',
    ]);
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
        return view('profesoredit',compact('profesor','id'));
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
      
        $this->validate($request,[ 'nombre'=>'required|string|alpha|max:255', 'apellido'=>'required|string|alpha|max:255', 'cedula'=>'required|integer|max:30000000|min:4000000|unique:profesor', 'tlf'=>'required|unique:profesor', 'email'=>'required|email|max:255|unique:users']);

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
      Profesor::find($id)->delete();
        return redirect()->route('profesor.index')->with('success','Registro eliminado satisfactoriamente');
    }
    }

