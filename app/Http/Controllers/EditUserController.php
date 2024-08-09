<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditUserController extends Controller
{
  public function edit($id)
  {
    $user = User::findOrFail($id);
    return view('content.tables.edit-user', compact('user'));
  }

  public function update(Request $request, $id)
  {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return redirect('/tables/basic');
  }

}
