<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function create()
    {
        $users = User::get();
        return view ('users.add', compact('users'));
    }
    public function store(StoreUserRequest $request)
    {
        $users = User::create($request->only('name','email')
                +[
                    'password' =>bcrypt($request->input('password'))
                ]);
        return redirect()->route('users.show', $users->id)->with('success', 'Estudiante creado correctamente');
    }
    public function show(User $user)
    {
        //$user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit(User $user)
    {
        //$user = User::find($id);
        //return $users;
        return view('users.edit', compact('user'));
    }
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request ->only ('name','email');
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }
        $user->update($data);
        return redirect()->route('users.index')->with('success','Usuario editado correctamente');
    }
}