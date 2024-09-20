<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandSupplierController extends Controller
{
    public static function index(){
        return view('brandSupplier');
    }
}
