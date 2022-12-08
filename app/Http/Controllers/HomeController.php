<?php

namespace App\Http\Controllers;

use App\Models\User_table;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomeIndex(){
        return view('Home');
    } 
    function DataInsert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');


        $isInsertSucces = user_table::insert(['name' => $name, 'email'=> $email, 'message'=> $message]);
        if($isInsertSucces){
            echo $name."<br>", $email."<br>", $message."<br>";
        }
        else {
            echo "<h1>Error</h1>";
        }
    }

}
