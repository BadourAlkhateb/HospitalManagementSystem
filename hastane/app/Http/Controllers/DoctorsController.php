<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;



class DoctorsController extends Controller
{
   
      
      public function index(){
      $doctors=Doctor::get();
      return view('doctors',compact('doctors'));
 } 
 public function create(){
  $doctors=Doctor::get();
  return view('create_doctors',compact('doctors'));
}
  public function store(Request $request){
    $doctor = new Doctor();
    $doctor->name = $request->name;
    $doctor->surname =$request->surname;
    $doctor->gender =$request->gender;
    $doctor->specialization =$request->specialization;
    $doctor->phone_number=$request->phone_number;

    $doctor->save();
    return redirect('doctors');
}

 public function destroy($id){
 Doctor::find($id)->delete();
 return redirect("doctors");

}
}
