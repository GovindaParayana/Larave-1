<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   function index(){
    echo  "Hello";
   }
   function world_message(){
    echo "world";
}


}