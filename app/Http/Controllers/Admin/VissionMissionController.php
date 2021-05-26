<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VissionMissionController extends Controller
{


    public function index()
    {

        $visionMissions = DB::table('about_us')
            ->select('id','title','content')
            ->get();
        return view('pages.admin.vission-mission.index',compact('visionMissions'));
    }

    public function edit($id)
    {

        $data = DB::table('about_us')
            ->select('title','content')
            ->where('id',$id)
            ->first();

        if(!$data) return abort(404);

        return view('pages.admin.vission-mission.edit',compact('data'));
    }
}
