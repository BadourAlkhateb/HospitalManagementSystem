<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surgery;
use App\Models\Patient;
use App\Models\Room;




class SurgeriesController extends Controller
{
   
      
      public function index(){
      $surgeries=Surgery::get();
      return view('surgeries',compact('surgeries'));
 } 
  public function create(){
  $patients=Patient::get();
  $rooms=Room::get();
  return view('create_surgeries',compact('patients','rooms'));
}
  public function store(Request $request){
    $surgery = new Surgery();
    $surgery->date = $request->date;
    $surgery->patient_id =$request->patient;
    $surgery->type=$request->type;
    $surgery->room_id=$request->room;
    

   
    $surgery->save();
    return redirect('surgeries');
}
  public function destroy($id){
 Surgery::find($id)->delete();
 return redirect("surgeries");

}  
}