<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuraganGrosirController extends Controller
{
    public static function index(){
        return view('juraganGrosir');
    }
}
