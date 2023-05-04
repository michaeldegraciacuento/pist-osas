<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Appointment, User, Event, Holiday, News, };
use Illuminate\Support\Facades\Auth;
use DB;
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $request->all();
        }
        
        $userId = Auth::id();
        $appointment_all = Appointment::where('user_id','=',$userId)->orderBy('date', 'DESC')->get();
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
         $latestPostNews = DB::table('news')
        ->latest('created_at')
        ->first();
        $latestPostEvents = DB::table('events')
        ->latest('created_at')
        ->first();
        $latestPostAnnouncements = DB::table('announcements')
        ->latest('created_at')
        ->first();
        $latestPostHolidays = DB::table('holidays')
        ->latest('created_at')
        ->first();


        $user = User::where('user_type', '<>', 4)->count();
        $holidays = Holiday::select('date')->get();
        $appointment = Appointment::count();
        $event = Event::count();
        $student = User::where('user_type',4)->count();
        $user = User::where('user_type', '<>', 4)->count();

        return view('dashboard.homepage',compact('appointment','student','user','event','holidays','appointment_all', 'list_appointment','latestPostNews','latestPostEvents','latestPostAnnouncements','latestPostHolidays'));

    }
    public function newsPost(Request $request)
    {
        $newsPost = DB::table('news')->get();
        return view('frontend.newsPost', compact('newsPost'));
    }
    public function eventPost(Request $request)
    {
        $eventPost = DB::table('events')->get();
        return view('frontend.eventPost',compact('eventPost'));
    }

    public function announcementPost(Request $request)
    {
        $announcementPost = DB::table('announcements')->get();
        return view('frontend.announcementPost', compact('announcementPost'));
    }
    public function contactUs(Request $request)
    {
        return view('frontend.contactUs');
    }
    public function aboutUs(Request $request)
    {
        return view('frontend.aboutUs');
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
