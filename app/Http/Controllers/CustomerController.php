<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // Import the customers class

class CustomerController extends Controller
{
    public function index()
    {
        return view('insta');
    }

    public function instareset()
    {
        $data = customer::all();
        //dd($data);
        return view('instaview', compact('data'));
    }
}
