<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessController extends Controller
{
    public function create(Request $request){
        $business = new Business();
        $business->user_id = $request->input('user_id');
        $business->name = $request->input('name');
        $business->email = $request->input('email');
        $business->registraion_no = $request->input('registraion_no');
        $business->save();
        return response()->json($business);
 
    }
 
    public function fetchBusiness(){
        $businesss = Business::with('user')->get();
        return response()->json($businesss);
    }
 
    public function fetchBusinessById($id){
     $businesss = Business::find($id);
     if ($business == null){
         return response()->json(["error" => "not found"]);
 
     }
     return response()->json($businesss);
 }
 
 
 
}
