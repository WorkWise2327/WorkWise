<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Client;
use App\Models\User;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{




    public function manageclient(){
        $data=client::all();
        return view("dashboard.admin.manageclient",compact("data"));
    }

    public function managefreelancer(){
        $data=user::all();
        return view("dashboard.admin.managefreelancer",compact("data"));
    }

    public function managejobsview(){
        $data=job::all();
        return view("dashboard.admin.managejobview",compact("data"));
    }

    public function addcv(){
        return view("dashboard.admin.addclient");
    }

    public function addfv(){
        return view("dashboard.admin.addfreelancer");
    }


    public function deleteclient($id)
    {
        $data=client::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletefreelancer($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletejob($id)
    {
        $data=job::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function addclient(Request $request)
    {
        $data=new client;

        $data->name=$request->name;
        $data->company=$request->company;
        $data->email=$request->email;
        $data->password=$request->password;

        $data->save();

        return redirect()->back();
    }

    public function addfreelancer(Request $request)
    {
        $data=new user;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;

        $data->save();

        return redirect()->back();
    }


    public function adminupdatejobview($id)
    {
        $data=job::find($id);
        return view("dashboard.admin.updatejobview",compact("data"));
    }

    public function adminupdatejobimageview($id)
    {
        $data=job::find($id);
        return view("dashboard.admin.updatejobimageview",compact("data"));
    }

    public function updateclientview($id)
    {
        $data=client::find($id);
        return view("dashboard.admin.updateclientview",compact("data"));
    }

    public function updatefreelancerview($id)
    {
        $data=user::find($id);
        return view("dashboard.admin.updatefreelancerview",compact("data"));
    }

    public function adminupdateclient(Request $request, $id)
    {
        $data=client::find($id);

        $data->name=$request->name;
        $data->company=$request->company;
        $data->email=$request->email;
        $data->password=$request->password;

        $data->save();

        return redirect('/manageclient');
    }

    public function adminupdatefreelancer(Request $request, $id)
    {
        $data=user::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;

        $data->save();

        return redirect('/managefreelancer');
    }

    public function adminupdatejob(Request $request, $id)
    {
        $data=job::find($id);

        $data->title=$request->jobTitle;
        $data->name=$request->companyName;
        $data->tag=$request->tags;
        $data->description=$request->jobDescription;
        $data->salary=$request->salary;
        $data->requirement=$request->jobRequirements;
        $data->apply=$request->howToApply;

        $data->save();

        return redirect('/managejobsview');
    }

    public function adminupdateimagejob(Request $request, $id)
    {
        $data=job::find($id);

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('comlogo',$imagename);

        $data->image=$imagename;

        $data->save();

        return redirect('/managejobsview');
    }






    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
