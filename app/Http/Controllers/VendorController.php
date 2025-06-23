<?php

namespace App\Http\Controllers;

use App\Models\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
  use App\Notifications\VendorApproved;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class VendorController extends Controller
{
    //Vendor Register
    
    public function register(Request $req){
 $r = new vendor();
 $r->VendorName= $req->VendorName;
   $r->VendorEmail= $req->VendorEmail;
   $r->VendorPhone= $req->VendorPhone;
  
    $r->VendorAddress= $req->VendorAddress;
    $r->VendorCity= $req->VendorCity;
   
      $r->VendorCountry= $req->VendorCountry;
      $r->VendorPassword= $req->password;
         // ✅ Handle file upload
    if ($req->hasFile('VendorProfilePicture')) {
        $file = $req->file('VendorProfilePicture');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('img/vendors'), $filename);
        $r->VendorProfilePicture = 'img/vendors/' . $filename;
    } else {
        // ✅ Use a cartoon avatar URL if no image is uploaded
          $r->VendorProfilePicture = 'img/vendors/profile.png';
    }
    
    $r->save();
    echo '<script> alert("Data has been Inserted")</script>';
       return redirect('/vendorregister')->with('status', 'Thanks for Registering! Your account is pending approval. You will receive an email notification once approved.');

    }
  
    //Vendor Custom Login
  public function customlogin (Request $req){

     
       $req->email;
        $req->password;

      $email=vendor::where('VendorEmail',$req->email)->first();
        $pass=  vendor::where('VendorPassword',$req->password)->first();
          if($email && $pass){
            session(['vendorid' => $email->id]);
            return redirect('/vendordashboard');
          }
          else{
            echo "Error while logging in";
          }
}



}