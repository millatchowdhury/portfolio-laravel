<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function page(){
        $seo = DB::table('seoproperties')->where('pageName', '=', 'project')->first();
        return view('pages.project', ['seo'=>$seo]);
    }
}
