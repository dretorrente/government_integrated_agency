<?php

namespace App\Http\Controllers;
use App\DfaRecord;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Mail;

class DfaRecordController extends Controller
{
    public function upload(Request $request) {
        if ($request->isMethod('post')) {
            $dfaRecords = new DfaRecord;
            $image              = $request->file('file');
            if ($image) {
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath    = 'img/DFA';
                $image->move($destinationPath, $input['imagename']);
                $dfaRecords->email = Auth::User()->email;
                $dfaRecords->image = 'img/DFA/'.$input['imagename'];
                $dfaRecords->class = $request['class'];
                if ($dfaRecords->save()) {
                    Session::flash('message','Your DFA Form has been succesfully submit!');
                    Session::flash('alert-class', 'alert-info');  
                    return redirect('/department_of_foreign_affair');
                } else {
                    Session::flash('message','Your DFA Form has been failed submit!');
                    Session::flash('alert-class', 'alert-danger');  
                    return redirect('/department_of_foreign_affair');
                }
            } else {
                Session::flash('message','Your DFA Form has been failed submit!');
                Session::flash('alert-class', 'alert-danger');  
                return redirect('/department_of_foreign_affair');
            }
        }
    }

    public function new_application() {
        $dfaRecords = DB::table('dfa_records')
                    ->select('dfa_records.*')
                    ->where('dfa_records.class', '=', 'New Application')
                    ->get();
        return view('dfa.admin_new_application',['new_applications' => $dfaRecords]);            
    }

    public function passport_renewal() {
        $dfaRecords = DB::table('dfa_records')
                    ->select('dfa_records.*')
                    ->where('dfa_records.class', '=', 'Passport Renewal')
                    ->get();
        return view('dfa.admin_passport_renewal',['passport_renewal' => $dfaRecords]);            
    }

    public function accept_application($id) {
        $dfaRecords         = DfaRecord::find($id);
        $dfaRecords->status = "accept";

        if ($dfaRecords->save()) {
            Mail::send('dfa.dfa_email', ['admin_message' => 'Your request has been approved by the admin'], function ($m) use ($dfaRecords) {
                $m->from('lihuza@duck2.club', 'Application approved');
                $m->to($dfaRecords->email)->subject('Department of Foreign Affairs');
            });
            Session::flash('message','Successfully user accepted');
            Session::flash('alert-class', 'alert-info'); 
            return redirect()->back();
        }
    }

    public function decline_application($id) {
        $dfaRecords         = DfaRecord::find($id);
        $dfaRecords->status = "decline";

        if ($dfaRecords->save()) {
            Mail::send('dfa.dfa_email', ['admin_message' => 'Your application has been declined by the admin'], function ($m) use ($dfaRecords) {
                $m->from('lihuza@duck2.club', 'Application decline');
                $m->to($dfaRecords->email)->subject('Department of Foreign Affairs');
            });
            Session::flash('message','Successfully user decline');
            Session::flash('alert-class', 'alert-info'); 
            return redirect()->back();
        }
    }
}
