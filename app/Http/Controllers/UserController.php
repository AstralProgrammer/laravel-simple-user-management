<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all();

    return view('users.index', compact('users'));
  }

  public function edit(User $user)
  {
    return view('users.edit', compact('user'));
  }

  public function update(Request $request, User $user)
  {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'role' => 'required',
    ]);
    $user->update($request->all());

    return redirect()->route('users.index')
      ->with('success', 'Updated successfully');
  }

  public function create()
  {
    return view('users.create');
  }

  public function store(Request $request, User $user)
  {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'username' => 'required',
      'password' => 'required',
      'role' => 'required',
    ]);

    $user->create($request->all());

    return redirect()->route('users.index')
      ->with('success', 'Updated successfully');
  }

  public function destroy(User $user)
  {
    $user->delete();

    return redirect()->route('users.index')
      ->with('success', 'Deleted successfully');
  }
}
