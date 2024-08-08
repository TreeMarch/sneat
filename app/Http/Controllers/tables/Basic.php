<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\showAllController as ShowAll;

class Basic extends Controller
{
  public function index(Request $request)
  {
//    dd($request->all());
    $users = ShowAll::showAll();
    return view('content.tables.tables-basic',compact('users'));
  }
}
