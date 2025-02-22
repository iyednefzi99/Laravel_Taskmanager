<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return Validator(array('Welcome to the', 'Welcome to'));
    }

    public function welcome()
    {
        return "Welcome to API";
    }



}
