<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;

class AdminController extends Controller
{
    public function index() {
        $rooms = Room::all();

        return view('admin.home', [
            'title' => 'Admin Page',
            'rooms' => $rooms
        ]);
    }
    
    public function add() {
        $types = RoomType::all();

        return view('admin.add', [
            'title' => 'Add Room',
            'types' => $types
        ]);
    }

    public function addRoom(Request $request) {
        $validReq = $request->validate([
            'name' => 'required',
            'room_type' => 'required',
            'price' => 'required|integer',
            'available' => 'required|integer',
        ]);

        if (!$request->image) {
            $validReq['image'] = 'https://smartauladi.sch.id/wp-content/uploads/no-image.jpg';
        }

        Room::create($validReq);

        return redirect('/admin')->with('status', 'Room created succesfully!');
    }
    
    public function edit($id) {
        $room = Room::where('id', $id)->first();
        $types = RoomType::all();

        return view('admin.edit', [
            'title' => 'Edit Room',
            'types' => $types,
            'room' => $room
        ]);
    }

    public function editRoom(Request $request) {
        $validReq = $request->validate([
            'name' => 'required',
            'room_type' => 'required',
            'price' => 'required|integer',
            'available' => 'required|integer',
        ]);

        if (!$request->image) {
            $validReq['image'] = 'https://smartauladi.sch.id/wp-content/uploads/no-image.jpg';
        }

        Room::where('id', $request->id)->update($validReq);

        return redirect('/admin')->with('status', 'Room edited succesfully!');
    }
    
    public function delete($id) {
       Room::where('id', $id)->delete();

       return redirect('/admin')->with('status', 'Room deleted succesfully!');
    }
}
