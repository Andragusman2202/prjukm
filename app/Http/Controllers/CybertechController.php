<?php

namespace App\Http\Controllers;
use App\cybertech;
use Illuminate\Http\Request;

class CybertechController extends Controller
{
    public function view(){
        return view('cyber.view');
    }
    
}
