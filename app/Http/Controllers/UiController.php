<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function ui(){
        return view('ui-elements-modals');
    }
}
