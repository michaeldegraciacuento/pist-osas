<?php

namespace App\Http\Controllers;

use App\Models\{Appointment, Holiday};
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $request->all();
        }

        $holidays = Holiday::select('date')->get();
        $list_appointment = Appointment::join('users','users.id','appointments.user_id')
        ->select('appointments.id as appointments_id','appointments.date','appointments.status' ,'users.*')
        ->latest();

        if($request->lname){
            $list_appointment = $list_appointment->where('lname', 'LIKE' ,'%'.$request->lname .'%');
        }
        if($request->uli){
            $list_appointment = $list_appointment->where('uli', 'LIKE' ,'%'.$request->uli .'%');
        }
        $list_appointment = $list_appointment->paginate(50);
        $list_appointment = $list_appointment->appends($request->except('page'));
        
        return view ('appointment.index',compact('holidays', 'list_appointment'));
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
        if($request->time == 'am'){
            $data->time = 'AM - 8:00am to 12:00pm';
        }else{
            $data->time = 'PM - 1:00pm to 5:00pm';
        }
        $data->status = 'Pending';  
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

        

        return view('appointment._view',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
      
        return view('appointment._status',compact('appointment'));
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
        $user_email = DB::table('users')->where('id',$request->user_id)->first();
        // return $user_email;
        $appointment->status = $request->status;
        $appointment->update();

       if($request->status == 'Approved')
       {
        Mail::to($user_email)->send(new SendEmail($appointment, $user_email));
        return redirect()->back()->with('success','Successfully Updated Status! Email Verification Sent!');
       }
       elseif($request->status == 'Reschedule')
       {
        Mail::to($user_email)->send(new SendEmail($appointment, $user_email));
        return redirect()->back()->with('success','Successfully Updated Status! Email Verification Sent!');
       }
       else
       {
        return redirect()->back()->with('success','Successfully Updated Status!');
       }

        
       
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
        $data->status = 'Pending';
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
