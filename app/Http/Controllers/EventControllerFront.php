<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class EventControllerFront extends Controller
{
    public function index(){
        
        return view('home');
      }
}
