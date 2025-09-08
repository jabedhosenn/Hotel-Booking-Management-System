<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel\Hotel;
use App\Models\Apartment\Apartment;


class HotelsController extends Controller
{
    public function rooms($id)
    {
        $getRooms = Apartment::select()->where('hotel_id', $id)->orderBy('id', 'asc')->take(6)->get();


        return view('hotels.rooms', compact('getRooms'));
    }
}
