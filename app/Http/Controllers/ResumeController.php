<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(){
        return view('pages.resume');
    }

    public function resumeDownloadRequest(Request $request){
        return DB::table('resume_download_links')->first();
    }

    public function experienceRequest(Request $request){
        return DB::table('experiences')->get();
    }
    public function educationRequest(Request $request){
        return DB::table('educations')->get();
    }
    public function skillsRequest(Request $request){
        return DB::table('skills')->get();
    }
}
