<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {

        $data =
            [
                "subject" =>  'رسالة تواصل جديدة | Jimi Wash',
                "msg"   =>  $request->message,
                "email" =>  $request->email,
            ];

        try {
            Mail::send('email.contact', $data, function ($message) use ($data) {
                $message->to('info@jimi.sa')->subject($data['subject']);
            });

            return back()->with('message', 'done');
        } catch (\Throwable $th) {
            dd('تأكد من صحة إعدادات الإيميل !');
        }
    }

    public function request(Request $request)
    {


        $data =
            [
                "subject" =>  'طلب خدمة | ' . $request->service_req,
                "phone"   =>  $request->phone,
                "car_type" =>  $request['car-type'],
                "date"   =>  $request->date,
                "size"   =>  $request->size,
                "color"   =>  $request->color,
                "service_req"   =>  $request->service_req,
            ];

        try {
            Mail::send('email.request', $data, function ($message) use ($data) {
                $message->to('info@jimi.sa')->subject($data['subject']);
            });

            return back()->with('message', 'done');
        } catch (\Throwable $th) {

            dd('تأكد من صحة إعدادات الإيميل !');
        }
    }
}
