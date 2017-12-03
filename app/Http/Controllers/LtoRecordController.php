<?php

namespace App\Http\Controllers;
use App\LtoRecord;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Mail;

class LtoRecordController extends Controller
{
    public function upload(Request $request) {
        if ($request->isMethod('post')) {
            $ltoRecords = new LtoRecord;
            $image              = $request->file('file');
            if ($image) {
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath    = 'img/LTO';
                $image->move($destinationPath, $input['imagename']);
                $ltoRecords->email = Auth::User()->email;
                $ltoRecords->image = 'img/LTO/'.$input['imagename'];
                $ltoRecords->class = $request['class'];
                if ($ltoRecords->save()) {
                    Session::flash('message','Your LTO Form has been succesfully submit!');
                    Session::flash('alert-class', 'alert-info');  
                    return redirect('/land_transportation_office');
                } else {
                    Session::flash('message','Your LTO Form has been failed submit!');
                    Session::flash('alert-class', 'alert-danger');  
                    return redirect('/land_transportation_office');
                }
            } else {
                Session::flash('message','Your LTO Form has been failed submit!');
                Session::flash('alert-class', 'alert-danger');  
                return redirect('/land_transportation_office');
            }
        }
    }

    public function student_application() {
        $ltoRecords = DB::table('lto_records')
                    ->select('lto_records.*')
                    ->where('lto_records.class', '=', 'Student Application')
                    ->get();
        return view('admin.admin_student_application',['student_applications' => $ltoRecords]);            
    }

    public function non_professional_application() {
        $ltoRecords = DB::table('lto_records')
                    ->select('lto_records.*')
                    ->where('lto_records.class', '=', 'Non-Professional Application')
                    ->get();
        return view('admin.admin_non_professional_application',['non_professional_applications' => $ltoRecords]);            
    }

    public function professional_application() {
        $ltoRecords = DB::table('lto_records')
                    ->select('lto_records.*')
                    ->where('lto_records.class', '=', 'Professional Application')
                    ->get();
        return view('admin.admin_professional_application',['professional_applications' => $ltoRecords]);            
    }

    public function accept_application($id) {
        $ltoRecords         = LtoRecord::find($id);
        $ltoRecords->status = "accept";

        if ($ltoRecords->save()) {
            Mail::send('admin.lto_email', ['admin_message' => 'Your request has been approved by the admin'], function ($m) use ($ltoRecords) {
                $m->from('lihuza@duck2.club', 'Application approved');
                $m->to($ltoRecords->email)->subject('Land Transportation Office');
            });
            Session::flash('message','Successfully user accepted');
            Session::flash('alert-class', 'alert-info'); 
            return redirect()->back();
        }
    }

    public function decline_application($id) {
        $ltoRecords         = LtoRecord::find($id);
        $ltoRecords->status = "decline";

        if ($ltoRecords->save()) {
            Mail::send('admin.lto_email', ['admin_message' => 'Your application has been declined by the admin'], function ($m) use ($ltoRecords) {
                $m->from('lihuza@duck2.club', 'Application decline');
                $m->to($ltoRecords->email)->subject('Land Transportation Office');
            });
            Session::flash('message','Successfully user decline');
            Session::flash('alert-class', 'alert-info'); 
            return redirect()->back();
        }
    }
}
