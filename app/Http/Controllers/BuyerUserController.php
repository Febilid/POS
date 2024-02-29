<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerUserController extends Controller
{
    public function index()
    {
        return view('buyeruser');
    }
}
