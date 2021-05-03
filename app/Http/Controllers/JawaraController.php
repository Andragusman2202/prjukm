<?php

namespace App\Http\Controllers;
use App\jawara;
use Illuminate\Http\Request;

class JawaraController extends Controller
{
    public function view(){
        return view('jawara.view');
    }
}
