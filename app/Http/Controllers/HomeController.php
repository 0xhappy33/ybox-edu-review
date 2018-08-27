<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\CreateUserRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }
    public function new()
    {
        die();
        return "123123123";
        // $user = User::create($request->only(["name", "email", "password"]));
        // return User::create($request->only(["name", "email", "password"])); 
        // response()->json([
        //     "user" => $user
        // ], 200);
    }
    public function newUser(){
        return "1231321321";
    }
}
