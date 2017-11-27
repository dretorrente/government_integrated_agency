<?php

namespace App\Http\Controllers;
use App\LtoRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LtoRecordController extends Controller
{
    public function upload(Request $request) {
    	if ($request->isMethod('post')) {
    		$ltoRecords = new LtoRecord;
			$image              = $request->file('file');
			$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
			$destinationPath    = public_path('/LTO/images');
		    $image->move($destinationPath, $input['imagename']);
		    $ltoRecords->email = Auth::User()->email;
		    $ltoRecords->image = 'public/LTO/images/'.$input['imagename'];
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
    	}
    }
}
