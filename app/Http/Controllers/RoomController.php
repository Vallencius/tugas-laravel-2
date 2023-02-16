<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function rooms() {
        $rooms = Room::all();
        
        return view('rooms', [
            'title' => 'Rooms',
            'rooms' => $rooms
        ]);
    }
}
