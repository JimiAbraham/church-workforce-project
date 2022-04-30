<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;

class HodController extends Controller
{
    public function index()

    {

        $dept = Auth::user()->department;

        // dd($dept);

        $users = DB::table('users')->where('department', $dept)
                                    ->where('status', 1)->get();

        return view('home.HodApproval', ['users'=>$users]);
    }



    public function approve( Request $request, $id)
    {
        $approve = DB::table('users')
        ->where('id', $request->id)
        ->update(['status' => 2, 'wf_status' => "Active"]);

        toastr()->success('New Member Approved');


        return back();

    }




    
    public function show()
    {

        $dept = Auth::user()->department;

        $users = DB::table('users')->where('department', $dept)
                                  ->where('status', 2)->get();

        return view('home.HodMembers', ['users'=>$users])->with('no', 1);

    }

    public function updateWfStatus( Request $request, $id)
    {

        

        $updateWfStatus = DB::table('users')
        ->where('id', $request->id)
        ->update(['wf_status' => $request->status ]);

        toastr()->success('Member Status Updated');

        return back();
            
    }
}
