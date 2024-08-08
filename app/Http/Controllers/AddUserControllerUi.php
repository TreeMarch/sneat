<?php

namespace App\Http\Controllers;

use App\Http\Controllers\form_layouts\HorizontalForm;
use Illuminate\Http\Request;

class AddUserControllerUi extends Controller
{
    public function index(){
      return view('content.form-layout.form-layouts-horizontal');
    }
}
