<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class UserController extends Controller
{

public function index(){
    return view('index');
}

public function about(){
    return view('about');
}

public function service(){
    return view('service');
}

public function portfolio(){
    return view('portfolio');
}


public function contact(){
    return view('contact');
}

public function sendEmail(Request $request)
{
    $detail = [
        'name' =>$request->name,
        'email' =>$request->email,
        'phone' =>$request->phone,
        'msg' =>$request->msg,
    ];
    Mail::to('zacwolfesr@gmail.com')->send(new ContactMail($detail));
    return back()->with(['message' => 'Email successfully sent!']);
}


public function Privacy_Policy(){
    return view('Privacy_Policy');

}


public function terms_conditions(){
    return view('terms_conditions');

}

public function team(){
    return view('team');

}

public function pricing_table(){
    return view('pricing_table');

}

public function animation2D(){
    return view('animation2D');

}


public function animation3D(){
    return view('animation3D');

}


public function logo_animation(){
    return view('logo_animation');

}


public function explainer_videos(){
    return view('explainer_videos');

}


public function typography(){
    return view('typography');

}


public function screencast(){
    return view('screencast');

}


public function whiteboard(){
    return view('whiteboard');

}

public function illustration(){
    return view('illustration');

}

public function case_study(){
    return view('case_study');

}



}

