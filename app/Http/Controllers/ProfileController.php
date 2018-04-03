<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;
Use Auth;
use Illuminate\Validation\Rule;


class ProfileController extends Controller
{
  public function getProfile()
  {
    $user = Auth::user();
    return view('/profile/profile', ['user' => $user]);
  }

  public function edit()
  {
    $user = Auth::user();
    return view('/profile/edit', ['user' => $user]);
  }


  public function update(Request $request)
  {
    $user = Auth::user();
    $this->validate($request, array(
      'email' => Rule::unique('users')->ignore($user->id, 'id')
    ));

    $input = $request->except('password');
    if ($request->has('password')){
      $input['password'] = bcrypt($request->get('password'));
    };
    $user->update($input);
    return redirect('/profile');
  }
}
