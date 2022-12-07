<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ApiStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all();
        return Response()->json(['Estudiantes'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = User::get();
        return view('users.add', compact ('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = User::create($request->only('nombre', 'apellido', 'usuario', 'correo')
    +[
        'contraseña'=>bcrypt($request->input('contraseña'))
    ]);
        return redirect()->route('users.show', $students->id)->with('success', 'Estudiante creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student)
    {
        return view('users.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $student)
    {
        return view('users.edit', compact('student'));
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
        $student = User::findOrFail($id);
        $data = $request ->only ('nombre','apellido','usuario','correo');
        if(trim($request->contraseña)=='')
        {
            $data=$request->except('contraseña');
        }
        else{
            $data=$request->all();
            $data['contraseña']=bcrypt($request->contraseña);
        }
        $student->update($data);
        return redirect()->route('users.index')->with('success','Usuario editado correctamente');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $student)
    {
        $user->delete();
        return redirect('users');
    }
}
