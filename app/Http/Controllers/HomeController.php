<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page(){
        
        return view('pages.home');
    }


    public function heroRequest(Request $request){
        return DB::table('heros')->first();
    }

    public function aboutRequest(Request $request){
        return DB::table('abouts')->first();
    }

    public function socialRequest(Request $request){
        return DB::table('socials')->first();
    }
}
