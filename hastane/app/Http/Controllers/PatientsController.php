<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;



class PatientsController extends Controller
{
   public function index(){
      $patients=Patient::get();
      return view('patients',compact('patients'));
 }
 public function create(){
  $patients=Patient::get();
  return view('create_patients',compact('patients'));
}
  public function store(Request $request){
    $patient = new Patient();
    $patient->name = $request->name;
    $patient->surname =$request->surname;
    $patient->phone_number=$request->phone_number;
   
    $patient->save();
    return redirect('patients');
}
  public function destroy($id){
 Patient::find($id)->delete();
 return redirect("patients");

}  
        
}
