<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class profileController extends Controller
{
    public function profile(Request $request)
    {
        $validateData=$request->validate([
            'Image'=>'required | mimes:jpeg, jpg, png'
        ]);

        $data=array();
        $data['Last_name']=$request->Last_name;
        $Image =$request->file('Image');
        $data['CV']=$request->CV;
        $posts=DB::table('userprofile')->insert($data);
        if($posts){
            return Redirect()->route('home');
        }
        else{
            return Redirect()->route('home');
        }
    }
}
