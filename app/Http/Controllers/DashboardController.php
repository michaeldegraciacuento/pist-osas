<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Appointment, User, Event, Holiday, News, };
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

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

    public function iaors()
    {
        return view('frontend.iaors');
    }
    public function gacs()
    {
        return view('frontend.gacs');
    }
    public function cajps()
    {
        return view('frontend.cajps');
    }
    public function eed()
    {
        return view('frontend.eed');
    }
    public function shd()
    {
        return view('frontend.shd');
    }
    // Code

public function our_backup_database(){

    //ENTER THE RELEVANT INFO BELOW
    $mysqlHostName      = env('DB_HOST');
    $mysqlUserName      = env('DB_USERNAME');
    $mysqlPassword      = env('DB_PASSWORD');
    $DbName             = env('DB_DATABASE');
    $backup_name        = "mybackup.sql";
    $tables             = array("users","announcements","appointments","events","holidays","migrations","model_has_permissions","model_has_roles","news","password_resets","permissions","role_has_permissions","roles"); //here your tables...

    $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $get_all_table_query = "SHOW TABLES";
    $statement = $connect->prepare($get_all_table_query);
    $statement->execute();
    $result = $statement->fetchAll();


    $output = '';
    foreach($tables as $table)
    {
     $show_table_query = "SHOW CREATE TABLE " . $table . "";
     $statement = $connect->prepare($show_table_query);
     $statement->execute();
     $show_table_result = $statement->fetchAll();

     foreach($show_table_result as $show_table_row)
     {
      $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
     }
     $select_query = "SELECT * FROM " . $table . "";
     $statement = $connect->prepare($select_query);
     $statement->execute();
     $total_row = $statement->rowCount();

     for($count=0; $count<$total_row; $count++)
     {
      $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
      $table_column_array = array_keys($single_result);
      $table_value_array = array_values($single_result);
      $output .= "\nINSERT INTO $table (";
      $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
      $output .= "'" . implode("','", $table_value_array) . "');\n";
     }
    }
    $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
    $file_handle = fopen($file_name, 'w+');
    fwrite($file_handle, $output);
    fclose($file_handle);
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
       header('Pragma: public');
       header('Content-Length: ' . filesize($file_name));
       ob_clean();
       flush();
       readfile($file_name);
       unlink($file_name);

}
}
