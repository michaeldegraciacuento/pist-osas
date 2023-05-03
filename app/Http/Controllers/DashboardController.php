<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Appointment, User, Event, Holiday};
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        
        $userId = Auth::id();
        $appointment_all = Appointment::where('user_id','=',$userId)->orderBy('date', 'DESC')->get();

        $user = User::where('user_type', '<>', 4)->count();
        $holidays = Holiday::select('date')->get();
        $appointment = Appointment::count();
        $event = Event::count();
        $student = User::where('user_type',4)->count();
        $user = User::where('user_type', '<>', 4)->count();

        return view('dashboard.homepage',compact('appointment','student','user','event','holidays','appointment_all'));
    }
    public function newsPost(Request $request)
    {
        return view('frontend.newsPost');
    }
    public function eventPost(Request $request)
    {
        return view('frontend.eventPost');
    }

    public function announcementPost(Request $request)
    {
        return view('frontend.announcementPost');
    }

    public function services(Request $request)
    {
        return view('frontend.services');
    }

    public function studentWelfareServices()
    {
        return view('frontend.studentWelfareServices');
    }

    public function studentDevelopmentServices()
    {
        return view('frontend.studentDevelopmentServices');
    }

    public function institutionalStudentProgramsAndServices()
    {
        return view('frontend.institutionalStudentProgramsAndServices');
    }

    public function destroy($id)
    {
       //
    }
}
