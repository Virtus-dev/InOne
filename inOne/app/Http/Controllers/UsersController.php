<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Gate;

//CRUD de usuarios

class UsersController extends Controller
{
    //implementación del middleware para chequear que es superadmin y permitir asi el acceso
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        //
        $users = User::all();
        return view('users.index')->with('users',$users);

    }


    public function create()
    {
        //
        return(view('users.create'));
    }

    public function store(Request $request)
    {
        //
        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $user = User::find($id);
        return(view('users/edit')->with('user', $user));
    }


    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->save();
        return redirect('/users');
    }

    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }
}
