<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIEiController extends Controller
{
    public function index()
    {
        $data = [
            ["id" => 1, "name" => "a"],
            ["id" => 2, "name" => "b"],
            ["id" => 3, "name" => "c"]
        ];

        return response()->json($data);
    } 
}
