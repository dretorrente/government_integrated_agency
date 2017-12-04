<?php

namespace App\Http\Controllers;

use App\NbiRecord;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Mail;

class NbiRecordController extends Controller
{
    public function upload(Request $request) {
        if ($request->isMethod('post')) {
            $nbiRecords = new NbiRecord;
            $image              = $request->file('file');
            if ($image) {
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath    = 'img/NBI';
                $image->move($destinationPath, $input['imagename']);
                $nbiRecords->email = Auth::User()->email;
                $nbiRecords->image = 'img/NBI/'.$input['imagename'];
                $nbiRecords->class = $request['class'];
                if ($nbiRecords->save()) {
                    Session::flash('message','Your NBI Form has been succesfully submit!');
                    Session::flash('alert-class', 'alert-info');  
                    return redirect('/national_bureau');
                } else {
                    Session::flash('message','Your NBI Form has been failed submit!');
                    Session::flash('alert-class', 'alert-danger');  
                    return redirect('/national_bureau');
                }
            } else {
                Session::flash('message','Your NBI Form has been failed submit!');
                Session::flash('alert-class', 'alert-danger');  
                return redirect('/national_bureau');
            }
        }
    }

    public function online_application() {
        $nbiRecords = DB::table('nbi_records')
                    ->select('nbi_records.*')
                    ->where('nbi_records.class', '=', 'Online Application')
                    ->get();
        return view('nbi.admin_online_application',['online_applications' => $nbiRecords]);            
    }

    public function accept_application($id) {
        $nbiRecords         = NbiRecord::find($id);
        $nbiRecords->status = "accept";

        if ($nbiRecords->save()) {
            Mail::send('nbi.nbi_email', ['admin_message' => 'Your request has been approved by the admin'], function ($m) use ($nbiRecords) {
                $m->from('lihuza@duck2.club', 'Application approved');
                $m->to($nbiRecords->email)->subject('Land Transportation Office');
            });
            Session::flash('message','Successfully user accepted');
            Session::flash('alert-class', 'alert-info'); 
            return redirect()->back();
        }
    }

    public function decline_application($id) {
        $nbiRecords         = NbiRecord::find($id);
        $nbiRecords->status = "decline";

        if ($nbiRecords->save()) {
            Mail::send('nbi.nbi_email', ['admin_message' => 'Your application has been declined by the admin'], function ($m) use ($nbiRecords) {
                $m->from('lihuza@duck2.club', 'Application decline');
                $m->to($nbiRecords->email)->subject('Land Transportation Office');
            });
            Session::flash('message','Successfully user decline');
            Session::flash('alert-class', 'alert-info'); 
            return redirect()->back();
        }
    }
}
