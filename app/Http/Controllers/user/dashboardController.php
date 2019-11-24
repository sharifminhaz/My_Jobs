<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class dashboardController extends Controller
{
    public function index(){
        $profile=DB::table('userprofile')->get();
        return view('User_Dashboard',compact('profile'));
    }
}
