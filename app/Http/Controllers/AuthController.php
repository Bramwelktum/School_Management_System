<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_student;
use Hash;
use Session;

class AuthController extends Controller
{
    function register(Request $request)
    {
        
        $student = new add_student();
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->dob = $request->dob;
        $student->course = $request->course;
        $student->phoneNumber = $request->phoneNumber;  
        $student->email = $request->email; 
        $student->password =$request->password; 
        $result=$student->save();

        if($result)
        {
            return back()->with('success','You have registered successfully');
        }
        else
        {
            return back()->with('fail','Something is wrong');
        }
    }
    
    function login(Request $request){
        $student = add_student::where('firstName','=',$request->firstName)->first();
        if ($student)
        {
            if ($student->password)
            {
                return redirect('student_dash');
            }
            else
            {
                return back()->with('fail','Password not matching');
            }
        } 
        else
        {
            return back()->with('fail','Student Name is not registered');
        }  

    } 

    public function profile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = add_student::where('id','=',Session::get('loginId'))->first();
        }
        return view('profile',compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
    function logins()
    {
        return view('login');
    }
}
