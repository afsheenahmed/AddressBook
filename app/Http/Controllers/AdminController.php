<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\vendor;


class AdminController extends Controller
{
    //View Users Function
    public function getuser() {
    $r = User::where('role', 'user')->get(); 
     return view('Admin.page-users',compact('r'));
    }
    //Delete User
    public function deleteuser($id)
{
$deleteuser = User::find($id);
$deleteuser->delete();
return redirect()->back();

}


 //View and update,delete Vendor Function
 
    public function getvendor() {
    $r = vendor::get() ;
     return view('Admin.page-vendors',compact('r'));
    }
    public function deletevendor($id)
{
$vendor = vendor::find($id);
$vendor->delete();
return redirect()->back();

}


public function updatevendor($id)
{
    $updatevendor = vendor::find($id);
    $updatevendor->VendorStatus = 'Approved';
    $updatevendor->save();
 return redirect()->back();
 

   
}


}
