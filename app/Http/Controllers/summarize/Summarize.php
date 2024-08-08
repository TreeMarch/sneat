<?php

namespace App\Http\Controllers\summarize;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Summarize extends Controller
{
  public function index(){
    return view('content.summarize.summarize');
  }
}
