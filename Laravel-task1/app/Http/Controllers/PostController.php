<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function insert(){
        return view('post.insert');
        // $emp_name = 'Rohit';
        // $salary = '20000';
        // $city = 'ludhiana';

        // $data = ['emp_name' => $emp_name, 'salary' => $salary, 'city'=> $city];
        // $post = Post::create($data);
        // echo "post insert successful" . $post->id;
    }
    public function savePost(Request $req){
        Post::create([
            "emp_name" => $req->emp_name,
            "salary" => $req->emp_salary, 
            "city" => $req->emp_city
        ]);

            return redirect()->back();
    }
    public function list(){
        $posts = Post::get();
        return view('post')->with(['posts' =>$posts]);
    }
}
