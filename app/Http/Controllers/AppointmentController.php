<?php

namespace App\Http\Controllers;

use App\Models\{Appointment, Holiday};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::select('date')->get();
        return view ('appointment.index',compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->appointment_id) {
        //     $data = Appointment::find($request->appointment_id);
        // } else {
        //     $data = new Appointment;
        //     $data->user_id = $request->user_id;
        // }
        $data = new Appointment;
        $data->user_id = Auth::id();
        $data->date = date('Y-m-d',strtotime($request->date));
        $data->time = $request->time;
        $data->status = 'not-cleared';  
        $data->count = 1;
        $data->purpose = $request->purpose;
        // return $data;
        // exit();
        $data->save();
        return redirect()->back()->with('success','Booking Successfully Stored!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
    public function setAppointment(Request $request) 
    {
        if ($request->appointment_id) {
            $data = Appointment::find($request->appointment_id);
        } else {
            $data = new Appointment;
            $data->user_id = $request->user_id;
        }

        $data->date = date('Y-m-d',strtotime($request->date));
        $data->time = $request->time;
        $data->status = 'not-cleared';
        $data->count = 1;
        $data->purpose = $request->purpose;
        $data->save();

        return redirect()->back()->with('success','Booking Successfully Stored!!');
       // return redirect('/congrats')->with('message',date('M d,Y',strtotime($data->date)));
    }
    public function datepicker(Request $request)
    {
        $first_step = $this->dateAvailability($request);
        $am = 0;
        $pm = 0;
        if ($first_step) {
            $am = $this->timeAvailability($request,'am');
            $pm = $this->timeAvailability($request,'pm');
        }

        return response()->json([
            'first_step' => $first_step[0],
            'available_slots' => 10 - $first_step[1],
            'am' => $am,
            'pm' => $pm
        ]);
    }
    public function dateAvailability(Request $request)
    {
        $date = date('Y-m-d',strtotime($request->data));

        if ($date == now()->format('Y-m-d')) {
            $available = 0;
        } else {
            $appointment_count = Appointment::whereDate('date',$date)->sum('count');

            if ($appointment_count == 30) {
                $available = 0;
            } else {
                $available = 1;
            }   
        }

        return [$available,$appointment_count];
    }

    public function timeAvailability(Request $request, $time)
    {
        $date = date('Y-m-d',strtotime($request->data));
        
        $appointment_count = Appointment::whereDate('date',$date)
                                        ->where('time',$time)
                                        ->sum('count');

        if ($appointment_count == 15) {
            return 0;
        } 
        return 1;
    }
}
