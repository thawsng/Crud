<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function eventController()
    {
        return view('event');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'eventName' => 'required|min:20',
                'bandNames' => 'required'
//                'ticketPrice' => 'min:1'
            ],
            [
                'eventName.required' => 'Vui lòng nhập tên sự kiện',
                'bandNames.required' => 'Vui lòng nhập tên ban nhạc'
            ]
        );
        return $validated;

    }
}
