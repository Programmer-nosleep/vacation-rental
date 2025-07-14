<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * 
     * 
    */
    public function rooms($id) {
        $get_rooms = Apartement::select()->orderBy('id', 'desc')->take(6)->where('hotel_id', $id)->get();
        return view('hotels.rooms', compact('get_rooms'));
    }

    public function room_details($id) {
        $get_rooms = Apartement::find($id);
        return view('hotels.roomdetails', compact('get_rooms'));
    }
}
