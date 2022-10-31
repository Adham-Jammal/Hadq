<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Settinggs;
use App\Friende;
use App\Slider;
use App\Goal;
use App\Service;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function request(Request $request)
    {

        $request->validate([
            'message' => 'required',
            'nbza' => 'required',
            'phone' => 'required',
            'name' => 'required',

        ]);
            Message::create([
                "message"  => $request["message"] ,
                "service"  => $request["service"] ,
                "nbza"     => $request["nbza"] ,
                "location" => $request["location"] ,
                "phone"    => $request["phone"] ,
                "email"    => $request["email" ],
                "name"     => $request["name"] ,]
            );


            
        $data =
        [
            "subject" =>  'طلب خدمة جديد من '. $request['name'],
            "msg"     =>  $request->message,
            "name"    =>  $request->name,
            "phone"    =>  $request->phone,
            "nbza"    =>  $request->nbza,
            "service"    =>  $request->service,
            "location"    =>  $request->location,
            "email"   =>  $request->email,
        ];
            
            // try {
            //     Mail::send('email.request', $data, function ($message) use ($data) {
            //         $message->to('alitaha27191@gmail.com')->subject($data['subject']);
            //     });
    
            //     return back()->with('message', 'done');
            // } catch (\Throwable $th) {
            //     dd($th);
            //     // return back();
            // }
            
            return back()->with('message','done');

    }

    public function index ($id = 0 ) {
        $data      = Settinggs::get()->first();
        $sliders   = Slider::get();
        $goals     = Goal::get();
        $friends   = Friende::get();
        $galleries = Service::get();
        if($id)
            return view('gallery',compact('data','sliders','goals','galleries','friends'));

        return view('index',compact('data','sliders','goals','galleries','friends'));
    }
}
