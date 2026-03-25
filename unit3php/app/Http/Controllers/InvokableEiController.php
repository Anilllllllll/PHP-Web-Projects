<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableEiController extends Controller
{
    public function __invoke($id)
    {
       $users = [
        1 => "A",
        2 => "B",
        3 => "C"
       ];

       return $users[$id] ?? "oops not found";
    }
}