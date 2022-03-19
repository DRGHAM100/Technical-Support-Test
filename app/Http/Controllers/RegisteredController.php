<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisteredRequest;
use Illuminate\Http\Request;
use App\Models\registered;
use App\Models\invited;
use Session;


class RegisteredController extends Controller
{
    public function check($email){
        return invited::where(['email'=> $email])->count();
    }

    public function index(){
        return view('welcome');
    }

    public function store(RegisteredRequest $request){
        $check = $this->check($request->email);

        if($check == 0)
            return redirect()->back()->withErrors(['notRegisterd' => 'عذرا ولكن البريد الاكتروني غير مسجل']);
        
        $newReg = registered::create($request->validated());

        if($newReg)
            Session::flash('success', 'تم تأكيد الحضور بنجاح'); 
            
        return redirect()->back();
    }
}
