<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{

    public function index()
    {


        $aboutUs = DB::table('about_us')
            ->select(['title','content'])
            ->get();
        $ourValues = DB::table('our_values')
            ->select(['title','content','icon'])
            ->get();
        $ourExperience = DB::table('our_experiences')
            ->select(['title','content','projects_finished','awards','satisfied_customers','employees'])
            ->first();
        return view('pages.personal.index',compact('ourValues','aboutUs','ourExperience'));
    }
}
