<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\poll;
use App\Models\poll_count;
use App\Models\message;

class AdminController extends Controller
{
    public function index()
    {

        $protocols = DB::table('users')->where('department','=', 'Protocol')->count();
        $pru = DB::table('users')->where('department','=', 'pru')->count();
        $media = DB::table('users')->where('department','=', 'media')->count();
        $witty = DB::table('users')->where('department','=', 'witty')->count();
        $pcu = DB::table('users')->where('department','=', 'pcu')->count();
        $avalanche = DB::table('users')->where('department','=', 'avalanche')->count();
        $ushering = DB::table('users')->where('department','=', 'ushering')->count();
        $childcare = DB::table('users')->where('department','=', 'childcare')->count();
        $qc = DB::table('users')->where('department','=', 'qc')->count();




        $male = DB::table('users')->where('gender','=', 'male')->count();
        $female = DB::table('users')->where('gender','=', 'female')->count();

        $HOD = DB::table('users')->where('status','=', '3')->count();
        $workers = DB::table('users')->where('status','=', '2')->count();


        $married = DB::table('users')->where('marital','=', 'married')->count();
        $single = DB::table('users')->where('marital','=', 'single')->count();


        

        return view('admin.dashboard', ['protocols'=>$protocols,
                                        'pru'=>$pru,
                                        'media'=>$media,
                                        'media'=>$media,
                                        'witty'=>$witty,
                                        'pcu'=>$pcu,
                                        'avalanche'=>$avalanche,
                                        'ushering'=>$ushering,
                                        'childcare'=>$childcare,
                                        'qc'=>$qc,
                                        'male'=>$male,
                                        'female'=>$female,
                                        'HOD'=>$HOD,
                                        'workers'=>$workers,
                                        'married'=>$married,
                                        'single'=>$single,
        
                                       ]);
    }



    public function AssignHod()
    {

        $users = DB::table('users')->where('status','!=', 2)
                                   ->get();

        return view('admin.assign-hod', ['users'=>$users])->with('no', 1);
    }


    public function hod( Request $request, $id)
    {
        // dd('working');
        $hod = DB::table('users')
        ->where('id', $request->id)
        ->update(['status' => 3,
                'department' => $request->department,
                            ]);

        return back()->with('message', 'New Member Approved');
    }

    public function viewHod()
    {
        $users = DB::table('users')->where('status','=', 3)
        ->get();
        return view('admin.all-Hod', ['users'=>$users])->with('no', 1);

    }


    public function allWorkers ()
    {

        $users = DB::table('users')->where('status','=', 2)
                                   ->get();
                                   
        return view('admin.all-workers', ['users'=>$users])->with('no', 1);
    }


    public function unappWorkers()
    {
        $users = DB::table('users')->where('status','=', 1)
        ->get();
        return view('admin.unapproved-workers', ['users'=>$users])->with('no', 1);

    }


    public function messages()
    {
        $allMessages = Message::all();
        $messageCount = Message::all()->count();


            // dd($allMessages);
        return view('admin.messages', ['allMessages'=> $allMessages,'messageCount'=> $messageCount ] );
    }



    public function pollPage()
    {

        $activePoll = poll::where('status', '0')->get();

        $InactivePoll = poll::where('status', '1')->get();


        return view('admin.poll-page', ['activePoll' => $activePoll, 'InactivePoll' => $InactivePoll])->with('no', 1)->with('count', 1);

    }


    public function NewPoll( Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);


        poll::create([
            'name' => $request->name,
            'status' => '0'

        ]);
        
        return back();
    }


    public function UpdatePoll( $id)
    {

        // dd($id);
        $changeStatus = poll::find($id);

        if ( $changeStatus->status == 1)
        { 
        $changeStatus->status = 0;
        }else{
        $changeStatus->status = 1;
        }
   
        $changeStatus->update();
        
        return back();

      

        
    }

    public function deletePoll( Request $request, $id)
    {
        poll::where("id", $request->id)->delete();
     
        return back();
    }

    public function PollResult( $id)
    {

        // dd($id);
        $response1 = DB::table('poll_counts')->where([
            ['votes', '=', 1],
            ['poll_id', '=', $id]
        ])->count();
        $response2 = DB::table('poll_counts')->where([
            ['votes', '=', 2],
            ['poll_id', '=', $id]
        ])->count();



    //   return view('admin.poll-response', ['response1'=> $response1, 'response2'=> $response2 ]);
    return view('admin.poll-response', ['response1'=> $response1, 'response2'=> $response2 ]);


    
    }

  



  


}
