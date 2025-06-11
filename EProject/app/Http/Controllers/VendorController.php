<?php

namespace App\Http\Controllers;

use App\Models\vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    //
    
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
    // return redirect()->back();
    }

}