<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Cart;
Use Auth;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{


    public function index()
    {
        $user = User::all();
        return view('/admin/users/users',['users' => $user]);
    }

    public function create()
    {
        $user = User::all();
        return view('/admin/users/new');
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->bday = $request->input('bday');
        $user->password = $request->input('password');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->zipcode = $request->input('zipcode');
        $user->country = $request->input('country');
        $user->is_admin = $request->input('is_admin');

        $user->save();

        Auth::login($user);

        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('/admin/users/edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->except('password');
        if ($request->has('password')){
            $input['password'] = bcrypt($request->get('password'));
        };
        $user->update($input);
        return redirect('/admin/users');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/users');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/profile');
        }
        return redirect('/login');
    }


    public function getLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
