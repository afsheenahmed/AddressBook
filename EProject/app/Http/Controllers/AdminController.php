<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vendor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //View Users Function
    public function getuser() {
    $r = User::get() ;
     return view('Admin.page-users',compact('r'));
    }
    public function deleteuser($id)
{
$deleteuser = User::find($id);
$deleteuser->delete();
return redirect()->back();

}


 //View Vendors Function
 
    public function getvendor() {
    $r = vendor::get() ;
     return view('Admin.page-vendors',compact('r'));
    }
    public function deletevendor($id)
{
$deletevendor = vendor::find($id);
$deletevendor->delete();
return redirect()->back();

}
   public function updatevendor($id)
{
$updatevendor = vendor::find($id);

  $updatevendor->VendorStatus='Approved';
  $updatevendor->save();
return redirect()->back();



}
}
