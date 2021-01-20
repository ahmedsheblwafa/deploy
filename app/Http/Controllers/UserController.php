<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
 

        

    // retrive student dataz

     //list all students
    public function indexStudent(){
        $student = User::where('role',2)->get();
        return view('admin.student-dash',['student'=> $student]);
    }
    
    // //list all Parents
    public function indexParent(){
        $parent = User::where('role',3)->get();
        return view('admin.parent-dash',['parent'=> $parent]);
    }
    
    // //list all Teachers
    public function indexTeacher(){
        $teacher = User::where('role',4)->get();
        return view('admin.teacher-dash',['teacher'=> $teacher]);
    }
    
    // //list all User
    public function indexUser(){
        $user = User::whereNotIn ('role',[2,3,4])->get();
        return view('admin.user-dash',['user'=> $user]);
    }

   
    
    
}


//view specific student by id
// function view($id){
//     return User::find($id);
// }

// public function show(User $student)
// {
//     return view("admin.view.view-student",["User"=>$student]);
// }
