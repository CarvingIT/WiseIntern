<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $data = User::all();
        return view('/usermanagement',['users'=>$data]);
       
        /*return view('/usermanagement');
        $users = wiseintern::select('select * from users');
        return view('/admin/usermanagement',['users'=>$users]);*/
        }
}
