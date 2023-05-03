<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class StudentTableSeeder extends Seeder
{
    public function run()
    {
        $student1 = User::create([
            'fname' => 'MUSLIMA' ,
            'mname' => 'R' ,
            'lname' => 'SULTAN' ,
            'ename' => '' ,
            'uli' => '2023-0001' ,
            'year' => '4TH YEAR' ,
            'course' => 'BSIT' ,
            'birthday' => '11/20/1996' ,
            'age' => '26' ,
            'birthplace' => 'ILIGAN CITY' ,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'purok' => 'PUROK 2' ,
            'barangay' => 'MARIA CRISTINA' ,
            'city' => 'BALOI' ,
            'province' => 'LANAO DEL NORTE' ,
            'region' => 'X' ,
            'gender' => 'FEMALE' ,
            'parent_name' => 'NAILAH R SULTAN' ,
            'parent_contact' => '09363901814' ,
            'contact_number' => '09363901814' ,
            'email' => 'muslimasultan@gmail.com' ,
            'user_type' => '4' ,
            'image' => '' ,
            
        ]); 
        $student1->assignRole('student');
      
    }
}
