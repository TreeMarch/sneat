<?php

namespace App\Http\Controllers\reading_story;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadStoryController extends Controller
{
    public function index(){
      return view('content.reading_story.read_page');
    }
}
