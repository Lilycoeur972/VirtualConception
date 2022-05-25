<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KaitaController extends Controller
{
    public function index(){

        $posts= User::all();
        return back() ;
    }
}
