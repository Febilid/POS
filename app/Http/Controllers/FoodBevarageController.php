<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBevarageController extends Controller
{
    public function index()
    {
        return view('Food And Beverage');
    }
}
