<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteInformationController extends Controller
{
    public function edit()
    {
        $data = DB::table('site_information')
            ->limit(1)
            ->first();
        return view('pages.admin.site-information.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string',
            'site_description' => 'required|string',
            'site_keyword'  => 'required|string',
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
            'facebook_url' => 'required|url',
            'instagram_url' => 'required|url',
            'twitter_url' => 'required|url',
            'address'   => 'required|string',
            'favicon'   => 'nullable|file|mimetypes:image/png,image/jpeg,image/jpg,image/svg'
        ]);

        $data = $request->except('favicon');
        if($request->has('favicon')){
            $data['favicon'] = $request->favicon->storeAs('images/icons',time().$request->favicon->getClientOriginalName(),'public');
        }

        $siteInformation = SiteInformation::first();

        if($siteInformation->update($data)){
            return redirect()
                ->route('administrator.site-information.edit')
                ->with('alert',[
                    'type' => 'success',
                    'msg' => 'Success Edited Site Information'
                ]);
        }

        return redirect()
                ->route('administrator.site-information.edit')
                ->with('alert',[
                    'type' => 'danger',
                    'msg' => 'Fail Edit Site Information'
                ]);
    }
}
