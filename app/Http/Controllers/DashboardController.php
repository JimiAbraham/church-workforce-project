<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\poll;
use App\Models\poll_count;
use App\Models\message;



class DashboardController extends Controller
{
    public function index()
    {
        

        return view('home.dashboard');
    }



    public function edit()
    {
        return view('home.update');
    }


    public function UpDept( Request $request )
    {

        $request->validate([
            'department' => 'required',
        ]);
        $user =Auth::user();
        
        $user->department = $request->department;
        $user->save();

        toastr()->success('Update Was Successful');

        return back();    
    }



    public function Update( Request $request )
    {

            // dd($request->all());


        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'DOB' =>'required',
            'job' =>'required',
            'marital'=> 'required',
            'address'=> 'required',
            'gender'=> 'required',

        ]);
        $user =Auth:: user();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->DOB = $request->DOB;
        $user->job = $request->job;
        $user->marital = $request->marital;
        $user->address = $request->address;
        $user->gender = $request->gender;

        $user->save();

        if ($user)
        {
            toastr()->success('Profile Updated');

        return redirect()->route('dashboard');   

        }
        else{
            toastr()->danger('Oops! Something went wrong. Try again');
            return back();
        }

    }


    public function DeleteMessage( Request $request, $id)
    {

     Message::where("id", $request->id)->delete();

     toastr()->warning('You Just Deleted A Message');

     
     return back();

    }

    public function ViewMessage()
    {
        $messages = Message::all()->where("user_id", auth()->user()->id); 

        $messageCount = Message::where('user_id', auth()->user()->id )->count();
        return view('home.view-messages', [ 'messageCount' => $messageCount, 'messages'=>$messages ])->with('no', 1);
    }


    public function sendMessagePage()
    {
               
 
        $messageCount = Message::where('user_id', auth()->user()->id )->count();
        return view('home.send-message', [ 'messageCount' => $messageCount ]);
    }



    public function sendMessage(Request $request)
    {


        $request->validate([
            'body' => 'required',
        ]);

        Message::create([
            'message' => $request->body,
            'user_id'=>auth()->user()->id
        ]);

        toastr()->success('Your Message Was Sent Successfully');

        return back();

    }


    public function pollPage()
    {
        $Activepoll = poll::where('status', 0)->get();

        // dd($polls);

        $VoteCheck = NULL;

         return view('home.poll', ['Activepoll' => $Activepoll, 'VoteCheck' => $VoteCheck ]);
    }
   

    public function PollingProcess( Request $request, $id, $polling)
    {


        // dd($polling);


       $voted =  poll_count::create([
             'user_id' => auth()->user()->id,
             'poll_id' => $id,
             'votes'   =>  $polling

        ]);


        $VoteCheck =  poll_count::where('user_id',  auth()->id())
                                ->where('poll_id',  $id)->exists();

            // dd($VoteCheck);

        return back()->with($VoteCheck);

        
       
    }

    // public function PollCheck()
    // {
    //     poll_count::where('user_id',  auth()->id())->exists();
    //                 ->where('poll_id',  auth()->id())->exists();
    // }

}