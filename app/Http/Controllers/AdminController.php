<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminaphpte\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Photo;
use App\User;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $couvertureHome = Photo::where('type',0)->first();
        $imageHome = Photo::where('type',1)->first();
        $couverturePages = Photo::where('type',2)->first();

        $params = ['couvertureHome' => $couvertureHome , 
                    'imageHome' => $imageHome ,
                    'couverturePages' => $couverturePages
                  ];
        return view('Dashboard.home',$params);
    }

    public function gallery(){
        $images = Photo::where('type',3)->get();
        return view('Dashboard.gallery',['photos' => $images]);
    }

    public function account(){
        return view('Dashboard.account');
    }

    public function updateUserInfo(Request $request){
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->save();
        return redirect('account');
    }

   

    public function updateUserPassword(Request $request){
        if(Hash::check($request->oldPassword , Auth::user()->password )){
            if ($request->newPassword == $request->confirmPassword){
                Auth::user()->password = Hash::make($request->newPassword);
                Auth::user()->save();
                return redirect('account');
            }
            else  return 'dont match';
        }
        else return 'mot de passe erroné !';
           
        
        return redirect('account');
    }
}
