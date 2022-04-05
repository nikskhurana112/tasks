<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class task1Controller extends Controller
{
    public function index(){
        $stud_name = "Tom";
        $class_name = 12;
        $roll_num = 33;
        return view("student")->with(["stud_name"=>$stud_name, "class_name"=>$class_name, "roll_num"=>$roll_num]);
    }
    
}
