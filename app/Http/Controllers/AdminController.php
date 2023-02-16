<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class AdminController extends Controller
{
    public function index() {
        $rooms = Room::all();

        return view('admin.home', [
            'title' => 'Admin Page',
            'rooms' => $rooms
        ]);
    }
}
