<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list()
    {
        # code...
    }
    public function insert()
    {
        return view("employee.insert");
    }
    public function create(Request $req)
    {
        $req->validate([
            "full_name" => "required|min:2|max:30|unique:employees",
            "age" => "required|min:18|max:50|numeric",
            "city" => "required|min:3|max:50",
            "date_of_birth" => "required|date_format:Y-d-m|after:1970-01-01",
            "email_address" => "required|email|unique:employees",
            "gender" => "required|in:male,Male,female,Female"
        ]);
       Employee::create([
           
            "full_name" => $req->full_name, 
            "city" => $req->city, 
            "age" => $req->age, 
            "gender" => $req->gender, 
            "email_address" => $req->email_address,
            "date_of_birth" => $req->date_of_birth
            
       ]);

       return redirect()->back();
    }
}
