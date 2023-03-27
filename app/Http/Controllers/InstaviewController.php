<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstaviewController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
