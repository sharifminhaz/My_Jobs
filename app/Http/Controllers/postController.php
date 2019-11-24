<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class postController extends Controller
{
    public function posts(Request $request)
    {
        $data=array();
        $data['Company']=$request->Company;
        $data['Job_title']=$request->Job_title;
        $data['Job_description']=$request->Job_description;
        $data['Salary']=$request->Salary;
        $data['Location']=$request->Location;
        $data['Country']=$request->Country;
        $posts=DB::table('posts')->insert($data);
        if($posts){
            return Redirect()->route('home');
        }
         else{
            return Redirect()->route('home');
        }
    }
}
