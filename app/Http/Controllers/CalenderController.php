<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index()
    {
    $events = array(); //membuat array kosong untuk kedepannya di isikan dari databasee
    $bookings = Booking::all();
    foreach($bookings as $booking){ //foreach pada variabel $bookings untuk mengambil setiap acara dan menambahkannya ke dalam array $events. 
      //Setiap acara ditambahkan ke dalam array $events dalam bentuk array asosiatif yang memiliki tiga kunci: title, start, dan end.
      $events[] = [
        'title' => $booking->title,
        'start' => $booking->start_date,
        'end' => $booking->end_date,
      ];
    }
    return view('calender.index', ['events' =>$events]);
    }
    public function store(Request $request)
    {
    $request->validate([
      'title' => 'required[string',

    ]);
    return 'pass';
    }
}
