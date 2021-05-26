<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurExperienceController extends Controller
{
    //

    public function edit()
    {
        $data = DB::table('our_experiences')
            ->select()
            ->first();
        if(!$data) abort(404);

        return view('pages.admin.our-experience.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'projects_finished'  => 'required|numeric',
            'awards'  => 'required|numeric',
            'satisfied_customers'  => 'required|numeric',
            'employees'  => 'required|numeric',
        ]);


        $value = OurExperience::firstOrFail();

        if($value->update($data)){
            return redirect()
                ->route('administrator.our-experience.edit')
                ->with('alert',[
                    'type' => 'success',
                    'msg' => 'Success Edited Company Experience ',
                ]);
        }


        return redirect()
                ->route('administrator.our-value.index')
                ->with('alert',[
                    'type' => 'danger',
                    'msg' => 'Fail Edit  Company Experience',
                ]);
    }
}
