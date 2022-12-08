<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidController extends Controller
{
    function getData(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);
        return $req->input();
    }
}
