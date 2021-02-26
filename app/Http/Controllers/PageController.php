<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "WElcome";
    }
    public function about(){
        echo "Ariono Septian Jaya / 1941720092";
    }
    public function articles($id){
        echo "Articel age with ID ".$id;
    }
}
