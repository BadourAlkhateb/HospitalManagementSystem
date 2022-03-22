<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Patient;



class TestsController extends Controller
{
   
      
      public function index(){
      $tests=Test::get();
      return view('tests',compact('tests'));
 } 
 public function create(){
  $patients=Patient::get();
  
  return view('create_tests',compact('patients'));
}
  public function store(Request $request){
    $test = new Test();
    $test->date = $request->date;
    $test->patient_id =$request->patient;
    $test->type=$request->type;
    
   
    $test->save();
    return redirect('tests');
}
  public function destroy($id){
 Test::find($id)->delete();
 return redirect("tests");

}  
}