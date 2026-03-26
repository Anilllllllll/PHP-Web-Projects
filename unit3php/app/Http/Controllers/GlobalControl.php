<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalControl extends Controller
{
    public function privacy()
    {
        return "you are allowed ";
    }
}