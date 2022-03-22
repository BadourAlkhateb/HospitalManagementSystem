<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;



class RoomsController extends Controller
{
   public function index(){
      $rooms=Room::get();
      return view('rooms',compact('rooms'));
 } 

 public function create(){
  $rooms=Room::get();
  return view('create_rooms',compact('rooms'));
}
  public function store(Request $request){
    $room = new Room();
    $room->room_no = $request->room_no;
    

    $room->save();
    return redirect('rooms');
} 
         public function destroy($id){
 Room::find($id)->delete();
 return redirect("rooms");

}
}
