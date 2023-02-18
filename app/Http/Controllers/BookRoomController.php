<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Room;
use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function index($id) {
        $room = Room::where('id', $id)->first();
        return view('book', [
            'title' => 'Book Room',
            'room' => $room
        ]);
    }
    public function bookRoom(Request $request) {
        $validReq = $request->validate([
            'user_id' => 'required|integer',
            'room_id' => 'required|integer',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);
        if(!$validReq){
            return response()->json("Failed To Book Room");
        }
        $validReq['status'] = 0;
        Booking::create($validReq);
        return redirect('/rooms')->with('status', 'Booking successful!');
    }

    public function bookList($id){
        $bookings = Booking::where('user_id', $id)->get();
        return view('booklist', [
            'title' => 'Book List',
            'bookings' => $bookings
        ]);
    }
}
