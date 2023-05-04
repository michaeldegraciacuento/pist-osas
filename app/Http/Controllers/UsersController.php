<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\{User};
use DB;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
       
        $you = auth()->user();
        $users = User::where('id','!=',1)->where('user_type','!=',4)->get();
        $roles = DB::table('roles')->where('id','!=',1)->where('id','!=',2)->get();
        return view('dashboard.admin.usersList', compact('users', 'you', 'roles'));
    }
   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          
            'email'      => 'required|email|max:256|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = new User;
        $user->lname       = $request->input('lname');
        $user->fname       = $request->input('fname');
        $user->email      = $request->input('email');
        $user->user_type      = $request->input('user_type');
        $user->password = Hash::make($request->input('password'));
        $user->save();

    
        $user->assignRole($request->role);
        
        return redirect()->back()->with('success','User added successfully!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userShow', compact( 'user' ));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $user_roles = [];
        foreach ($user->roles as $role) {
            array_push($user_roles,$role->id);
        }
       
        return view('dashboard.admin.userEditForm', compact('user', 'user_roles'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'       => 'required|min:1|max:256',
            'email'      => 'required|email|max:256',
        ]);

        $user = User::find($id);
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');

        if($request->password)
        {
            $validatedData = $request->validate([
                'name'       => 'required|min:1|max:256',
                'email'      => 'required|email|max:256',
                'password' => 'required|string|min:8|confirmed',
            ]);
            $user->password = Hash::make($request->input('password'));
        }
        
        $user->save();

        $current_roles =  $user->getRoleNames()->toArray();
        $new_roles = [];
        foreach($request->roles as $role)
        {
            $status = in_array($role,$current_roles);
            if(!$status)
            {
                $user->assignRole($role);
            }
            array_push($new_roles,$role);
        }

        foreach($current_roles as $role)
        {
            $status = in_array($role,$new_roles);
            if (!$status)
            {
                $user->removeRole($role);
            }
        }
        return redirect()->route('users.index')->with('success','Successfully Updated User!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $deleted_count = User::withTrashed()->where('email', 'LIKE' ,'%'.$user->email .'%')->count() + 1;
            $user->email = $user->email.'-deleted'.$deleted_count;
            $user->save();
            $user->delete();
        }
        return redirect()->route('users.index')->with('success','Successfully Deleted User!');
    }
    public function storeStudent(Request $request)
    {
        
        $student=new User();
        $student->uli=$request->uli;
        $student->fname=$request->fname;
        $student->mname=$request->mname;
        $student->lname=$request->lname;
        $student->ename=$request->ename;
        $student->birthday=$request->birthday;
        $student->user_type=$request->user_type;
        $student->birthplace=$request->birthplace;
        $student->age=$request->age;
        $student->contact_number=$request->contact_number;
        $student->email=$request->email;
        $student->parent_name=$request->parent_name;
        $student->parent_contact=$request->parent_contact;
        $student->purok=$request->purok;
        $student->barangay=$request->barangay;
        $student->password = Hash::make($request->uli);
        $student->city=$request->city;
        $student->province=$request->province;
        $student->region=$request->region;
        $student->gender=$request->gender;
        $student->year=$request->year;
        $student->course=$request->course;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/students', $picture);
            $student->image = $url; 
        }
        $student->save();
       // $user->assignRole($request->role);
        $student->assignRole($request->role);
        return redirect()->back()->with('success','Successfully Stored Data!!');
    }
    public function viewAppointment(Request $request, $id)
    {
        //$userId = Auth::id();
        $appointment_all = Appointment::where('user_id','=',$id)->orderBy('date', 'DESC')->get();

        return view('student._viewAppointment',compact('appointment_all'));
    }
    public function updateStudent(Request $request, $id)
    {
        $student = User::where('id','=',$id)->first();
        return view('student._update',compact('student'));
    }
    public function editStudent(Request $request, $id)
    {
        $student = User::where('id', $id)->first();
        $student->uli=$request->uli;
        $student->fname=$request->fname;
        $student->mname=$request->mname;
        $student->lname=$request->lname;
        $student->ename=$request->ename;
        $student->birthday=$request->birthday;
        $student->user_type=$request->user_type;
        $student->birthplace=$request->birthplace;
        $student->age=$request->age;
        $student->contact_number=$request->contact_number;
        $student->email=$request->email;
        $student->parent_name=$request->parent_name;
        $student->parent_contact=$request->parent_contact;
        $student->purok=$request->purok;
        $student->barangay=$request->barangay;
        $student->city=$request->city;
        $student->province=$request->province;
        $student->region=$request->region;
        $student->gender=$request->gender;
        $student->year=$request->year;
        $student->course=$request->course;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/students', $picture);
            $student->image = $url; 
        }
        $student->update();
        return redirect()->back()->with('success','Successfully Updated Data!!');
    }
    public function destroyStudent($id)
    {
        $user = User::where('id',$id)->first();
        
        $user->delete();
    
        return redirect()->route('student.index')->with('success','Successfully Deleted Data!');
    }
}
