<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareEiController extends Controller
{
    public function display()
    {
        return "Middleware controller is working";
    }
}