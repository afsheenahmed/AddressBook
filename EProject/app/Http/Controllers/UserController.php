<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact; 
class UserController extends Controller
{
    //
    public function contactdata(Request $req)
    {
       
       if($req->name == '' || $req->email == '' || $req->telephone == '' || $req->subject == '' || $req->message == '')
       {
           return redirect('/contact')->with('error', 'All fields are required!');
       }
       else
       {
        $c = new contact();
        $c->Name = $req->name;
        $c->Email = $req->email;
        $c->Phone = $req->telephone;
        $c->Subject = $req->subject;
        $c->Message = $req->message;
        $c->save();
       }
        return redirect('/contact')->with('success', 'Your message has been sent successfully!');
    }
}
