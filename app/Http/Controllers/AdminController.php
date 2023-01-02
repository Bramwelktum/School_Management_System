<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\add_lecturer;
use App\Models\add_student;
use App\Models\add_course;
use App\Models\add_Unit;
use App\Models\addMarks;
use DB;


class AdminController extends Controller
{
    //ADD LECTURER
    // Create Lec Form
public function addLecturerForm(Request $request) {
    return view('addLecturer');
  }

  // Store Lec Form data in database
  public function LecturerForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'fname' => 'required',
          'lname' => 'required',
          'DOB' => 'required',
          'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'email' => 'required|email',
          'units'=>'required',
          'password' => 'required'
       ]);

      //  Store data in database
      add_lecturer::create($request->all());
      return back()->with('success', 'Your form has been submitted.');
  }
  
  //ADD STUDENTS
  // Create add students Form
public function addStudentForm(Request $request) {
    return view('addStudent');
  }

  // Store Student Form data in database
  public function StudentForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'firstName' => 'required',
          'lastName' => 'required',
          'dob' => 'required',
          'course'=>'required',
          'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'email' => 'required|email',
          'password' => 'required'
       ]);

      //  Store data in database
      add_student::create($request->all());
      return back()->with('success', 'Your form has been submitted.');

}

  //ADD Marks
  // Create add students Form
public function addMarksForm(Request $request) {
    return view('addMarks');
  }

  // Store Student Form data in database
  public function MarksForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'studentName' => 'required',
          'courseWork' => 'required',
          'exam' => 'required',
          'total'=>'required',
       ]);

      //  Store data in database
      addMarks::create($request->all());
      return back()->with('success', 'Your form has been submitted.');

}

    //ADD COURSE
    // Create Course Form
    public function addCourseForm(Request $request) {
        return view('addCourse');
      }
    
      // Store Course Form data in database
      public function CourseForm(Request $request) {
    
          // Form validation
          $this->validate($request, [
              'courseName' => 'required',
              'type' => 'required',
              'duration' => 'required',
              'faculty' => 'required'
           ]);

          //  Store data in database
          add_course::create($request->all());
          return back()->with('success', 'Your form has been submitted.');
      }

      //ADD Units
      // Create Units Form
public function createUnitForm(Request $request) {
  return view('addUnit');
}

// Store Unit Form data in database
public function UnitForm(Request $request) {

//Unit Form validation
    $this->validate($request, [
        'unitCode' => 'required',
        'unitName' => 'required',
        'year'=>'required',
        'lecturerName' => 'required'
     ]);

//  Store data in units table
    add__unit::create($request->all());
    return back()->with('success', 'Your form has been submitted.');
}

      //VIEW COURSE
      public function index(){
        $courses = DB::select('select * from add_courses');
        return view('viewCourse',['courses'=>$courses]);
        }

      //VIEW MARKS
      public function index5(){
        $marks = DB::select('select * from add_marks');
        return view('viewMarks',['marks'=>$marks]);
        }
      
      //VIEW LECTURER
      public function index2(){
        $lecturers = DB::select('select * from add_lecturers');
        return view('viewLecturer',['lecturers'=>$lecturers]);
        }  

       //VIEW Student
      public function index3(){
        $students = DB::select('select * from add_students');
        return view('viewStudent',['students'=>$students]);
          }

      public function index4(){
            $users = DB::select('select * from add_students');
            return view('updateStudent',['students'=>$students]);
            }
          //Update Student
          public function show($id) {
          $users = DB::select('select * from add_students where id = ?',[$id]);
          return view('updateStudent',['students'=>$students]);}
          //Edit Student
          public function edit(Request $request,$id) {
          $firstName = $request->input('firstName');
          $lastName = $request->input('lastName');
          $dob = $request->input('dob');
          $course = $request->input('course');
          $phoneNumber = $request->input('phoneNumber');
          $email = $request->input('email');
          $password = $request->input('password');
          /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
          /*DB::table('student')->update($data);*/
          /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
          DB::update('update add_students set firstName = ?,lastName=?,dob=?,course=?,phoneNumber=?,email=?,password=? where id = ?',[$firstName,$lastName,$dob,$course,$phoneNumber,$email,$password,$id]);
          echo "Record updated successfully.
          ";
          }
}
