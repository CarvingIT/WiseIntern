<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\UserController;

class UserController extends Controllers
{
    //
    public function index(){
        return view('/admin/usermanagement');
        /*$users = wiseintern::select('select * from users');
        return view('/admin/usermanagement',['users'=>$users]);*/
        }
}
