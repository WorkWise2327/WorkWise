<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Apply;

use App\Models\Job;


class UserController extends Controller
{


    public function userhome(){

        $data=job::all();
        return view("dashboard.user.home", compact("data"));

    }

    public function applyforjobview($id){

        $data=job::find($id);
        $data2=user::find($id);
        $data3=client::find($id);
        return view("dashboard.user.applyforjobview", compact("data","data2","data3"));

    }

    public function applyjob(Request $request)
    {
        $data=new apply;

        $cv=$request->cv;

        $cv=time().'.'.$cv->getClientOriginalExtension();
                    $request->cv->move('cv',$cv);



        $cover=$request->cover;

        $cover=time().'.'.$cover->getClientOriginalExtension();
                    $request->cover->move('cover',$cover);

        $data->cover=$cover;
        $data->cv=$cv;
        $data->user_id=$request->userid;
        $data->user_name=$request->name;
        $data->user_email=$request->email;
        $data->job_id=$request->jobid;
        $data->title=$request->jobTitle;
        $data->name=$request->jobCompany;

        $data->save();

        return redirect()->back();
    }




    public function myjobsview(){

        $userName = Auth::guard('web')->user()->name;

    $data = apply::where('applies.user_name', $userName)
                ->get();
        return view("dashboard.user.myjobsview", compact("data"));

    }

    public function surf(){

        $data=job::all();
        return view("dashboard.user.surfjob", compact("data"));

    }

    public function savedjobview(){
        $data = job::where('savejob', 'saved')->get();
        return view("dashboard.user.savedjobview", compact("data"));
    }


    public function moveto($id){
        $data=job::find($id);
        return view("dashboard.user.referjob", compact("data"));
    }

    public function movetosaved($id){
        $data=job::find($id);
        return view("dashboard.user.refersavedjob", compact("data"));
    }



    function create(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'

        ]);

        $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $save = $user->save();

          if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect('/userhome');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    public function savejobs(Request $request, $id)
    {
        $data=job::find($id);
        $savejob="saved";

        $data->savejob=$savejob;

        $data->save();

        return redirect()->back();
    }

    public function deletesavejobs(Request $request, $id)
    {
        $data=job::find($id);
        $savejob="not saved";

        $data->savejob=$savejob;

        $data->save();

        return redirect('/savedjobview');
    }




    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
