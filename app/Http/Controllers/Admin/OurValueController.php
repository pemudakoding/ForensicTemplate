<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurValueController extends Controller
{

    public function index()
    {
        $ourValues = DB::select('select id,title,content,icon from our_values');

        return view('pages.admin.our-value.index',compact('ourValues'));
    }

    public function edit($id)
    {
        $data = DB::table('our_values')
            ->select('id','title','content')
            ->where('id',$id)
            ->first();
        if(!$data) return abort(404);


        return view('pages.admin.our-value.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'icon'  => 'nullable|file|mimetypes:image/png,image/jpg,image/jpeg,image/svg'
        ]);

        $data  = $request->except('icon');
        if($request->has('icon')){
            $data['icon'] = $request->icon->storeAs('images/icons',time().$request->icon->getClientOriginalName(),'public');
        }

        $value = OurValue::findOrFail($id);

        if($value->update($data)){
            return redirect()
                ->route('administrator.our-value.index')
                ->with('alert',[
                    'type' => 'success',
                    'msg' => 'Success Edited '.$value->title
                ]);
        }


        return redirect()
                ->route('administrator.our-value.index')
                ->with('alert',[
                    'type' => 'danger',
                    'msg' => 'Fail Edit '.$value->title
                ]);
    }
}
