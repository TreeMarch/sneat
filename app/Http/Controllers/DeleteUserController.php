<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect('/tables/basic');
  }
}
