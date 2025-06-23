<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;
use App\Models\User;

class UserController extends Controller
{
    //User Register Function
    public function register (Request $req)
{
$name = $req->username;
$email = $req->useremail;
$pass = $req->userpassword; 


$user = new User();
$user->name=$name;
$user->email=$email;
$user->password=$pass;


$user->save();
return redirect()->back()->with('Message','Successfully Registered');
}
 
//ContactUs Function
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
    public function allContacts()
    {
    $c = Contact::get(); // Use capital 'C' for model name
    return view('Admin.contactfetch', compact('c'));
    }
}
