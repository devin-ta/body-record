<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $histories = Status::all();
        return view('dashboard', compact('histories'));
    }

    public function newData()
    {
        return view('newData');
    }

    public function addData(Request $request)
    {
        $history = new Status();
        $history->measured_at = $request->date.' '.$request->time;
        $history->high_blood_pressure = $request->high_blood_pressure;
        $history->low_blood_pressure = $request->low_blood_pressure;
        $history->heart_beat = $request->heart_beat;
        $history->body_temp = $request->body_temp;
        $history->note = $request->note;
        $history->save();

        return redirect()->route('dashboard');
    }
}
