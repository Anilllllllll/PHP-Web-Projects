<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceEiController extends Controller
{
    public function index()
    {
        return "index ";
    }  

    public function show(string $id)
    {
        return "The value of id is " . $id;
    }
}