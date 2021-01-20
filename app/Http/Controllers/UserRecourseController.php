<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRecourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                  User::create([
                    "name"=>$request["name"],
                    "email"=>$request["email"],
                    "password"=>$request["password"],
                    "role"=>$request["role"],
                    "parentId"=>$request["parentId"],
                    "studentId"=>$request["studentId"],
                    "grade"=>$request["grade"],
                    "course"=>$request["course"]
                  ]);
          
                  return redirect(route("user.create"));
          
              
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view ('user.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view ('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "name"=>"required|min:5",  
            "email"=>"required|email",
            
           
        ]);

        $user->update([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "parentId"=>$request["parentId"],
            "studentId"=>$request["studentId"],
            "grade"=>$request["grade"],
            "course"=>$request["course"]
            ]);
            
           return redirect(route("user.show",["user"=>$user]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       
            $user->delete();
            return redirect(route("admin.student-dash"));
        }
    }
