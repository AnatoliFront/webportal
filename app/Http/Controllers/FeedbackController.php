<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class FeedBackController extends Controller
{
    public function send(Request $request) {
    
        $toEmail = "tolikkupava@gmail.com";
        Mail::to($toEmail)->send(new FeedbackMail($request));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
}
