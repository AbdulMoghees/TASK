<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Input;
use Illuminate\support\Facades\File;
use Illuminate\support\Facades\URL;
use APP\Profile;
use Illuminate\Auth;
class Profilecontroller extends Controller
{
    public function profile(){
        return view("profiles.profile");
    }
    public function addprofile(Request $request){
        $this->validate($request,[
            "name"=>"required"
            "Designation"=> "required";
            "Profile_pic"=> "required";

$profile = new Profile;
        $profile->name = $request->input('name');


        $profile->user_id= Auth::user()->id;
        $profile->profile_pic = $request->input('profile_pic');
        $profile->designation = $request->input('designation');

        if(Input::hasfile("profile_pic")){
    $file=input::file('profile_pic');
        $file->move(public_path().'/uploads',$file->getclientorigionaname());
$url =URU::to().'/uploads';$file->getClientorigionalName();
return $url;
exit();
}
    $profile->profile_pic=$request->Input('name');
$profile->save();
return redirect('/profile')
            ("response","profile added successfully");

    }
}
