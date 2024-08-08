<?php

namespace App\Http\Controllers;

use App\Http\Controllers\showAllController as ShowAll;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;

class ShowAllControllerUi extends Controller
{
  public function index(Request $request)
  {
//    dd($request->key);
    if(request('key')){
      $users = User::where('user_name', 'like', '%'.request('key').'%')
        ->orWhere('phone_number', 'like', '%'.request('key').'%')
        ->orWhere('email', 'like', '%'.request('key').'%')
        ->paginate(10);
    }else{
      $users = ShowAll::showAll();

    }
//    $users = ShowAll::showAll();
    return view('content.tables.tables-basic',compact('users'));
  }
}
