<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view ('users.index', compact ('users'));
    }
    public function show($id)
    {
        $item = User::find($id);
        //dd($item);
        return view ('users.show', compact('item'));
    }
}
