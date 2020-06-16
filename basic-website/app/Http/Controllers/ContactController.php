<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Messages;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
        $message= new Messages();
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->subject=$request->input('subject');
        $message->message=$request->input('message');

        $message->save();

        return redirect()->route('home')->with('success','Submitted Successfully! Thank You!');
    }

    public function fetchContacts(){
        $message=Messages::all();
        return view('messages',['messages'=>$message]);
    }
}
