<?php

namespace App\Http\Controllers;

use App\Http\Controllers\showAllController as ShowAll;
use Illuminate\Http\Request;

class ShowAllControllerUi extends Controller
{
  public function index()
  {
    $users = ShowAll::showAll();
    return view('content.tables.tables-basic',compact('users'));
  }
}
