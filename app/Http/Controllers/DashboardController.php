<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Appointment, User, Event};
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $appointment = Appointment::count();
        $event = Event::count();
        $student = User::where('user_type',4)->count();
        $user = User::where('user_type', '<>', 4)->count();

        return view('dashboard.homepage',compact('appointment','student','user','event'));
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
