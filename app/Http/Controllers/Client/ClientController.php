<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Apply;

class ClientController extends Controller
{


    public function reveiw(){
        $clientCompanyName = Auth::guard('client')->user()->company;

    $data = Job::where('jobs.name', $clientCompanyName)
                ->get();

    return view("dashboard.client.reveiwjobs", compact("data"));
    }

    public function appliedjobsview(){
        $clientCompanyName = Auth::guard('client')->user()->company;

    $data = apply::where('applies.name', $clientCompanyName)
                ->get();

    return view("dashboard.client.appliedjobs", compact("data"));
    }

    public function approvejob(Request $request, $id)
    {
        $data=apply::find($id);
        $status="Approved";

        $data->status=$status;

        $data->save();

        return redirect('/appliedjobsview');
    }

    public function denyjob(Request $request, $id)
    {
        $data=apply::find($id);
        $status="Denied";

        $data->status=$status;

        $data->save();

        return redirect('/appliedjobsview');
    }





    public function add(){
        $data=client::all();
        return view("dashboard.client.add", compact("data"));
    }


    public function updateview($id)
    {
        $data=job::find($id);
        return view("dashboard.client.update", compact("data"));
    }


    public function updatejob(Request $request, $id)
    {
        $data=job::find($id);

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('comlogo',$imagename);

        $data->image=$imagename;

        $data->title=$request->jobTitle;
        $data->name=$request->companyName;
        $data->tag=$request->tags;
        $data->description=$request->jobDescription;
        $data->salary=$request->salary;
        $data->requirement=$request->jobRequirements;
        $data->apply=$request->howToApply;

        $data->save();

        return redirect('/reveiw');
    }






    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:clients,email',
             'company'=>'required',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $client = new Client();
          $client->name = $request->name;
          $client->email = $request->email;
          $client->company = $request->company;
          $client->password = \Hash::make($request->password);
          $save = $client->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Client');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:clients,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in clients table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('client')->attempt($creds) ){
            return redirect()->route('client.home');
        }else{
            return redirect()->route('client.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('client')->logout();
        return redirect('/');
    }



    public function upload(Request $request)
    {
        $data=new job;
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('comlogo',$imagename);

        $data->image=$imagename;

        $data->title=$request->jobTitle;
        $data->name=$request->companyName;
        $data->tag=$request->tags;
        $data->description=$request->jobDescription;
        $data->salary=$request->salary;
        $data->requirement=$request->jobRequirements;
        $data->apply=$request->howToApply;

        $data->save();

        return redirect()->back();
    }



    public function delete($id)
    {
        $data=job::find($id);
        $data->delete();
        return redirect()->back();
    }



}
