<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
      'name'=>'required',
      'email'=>'required']);
      // Create new Message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      // Save Message
      $message->save();

      // Redirect
      return redirect('/')->with('success', 'Message Sent Successfully..');
    }

    public function getMessages(){
      $messages = Message::all();

      return view('messages')->with('messages',$messages);
    }
}
