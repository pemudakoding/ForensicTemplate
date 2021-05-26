<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
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
            ->select('id','title','content')
            ->where('id',$id)
            ->first();

        if(!$data) return abort(404);

        return view('pages.admin.vission-mission.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $vm = AboutUs::findOrFail($id);
        if(!$vm) abort(404);

        if($vm->update($data)){
            return redirect()
                ->route('administrator.vision-mission.index')
                ->with('alert',[
                    'type' => 'success',
                    'msg' => 'Success Edited '.$vm->title
                ]);
        }


        return redirect()
                ->route('administrator.vision-mission.index')
                ->with('alert',[
                    'type' => 'danger',
                    'msg' => 'Fail Edit '.$vm->title
                ]);
    }
}
