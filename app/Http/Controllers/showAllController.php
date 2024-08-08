<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class showAllController extends Controller
{
  public static function showAll(){
    return User::paginate(10);
  }
}
