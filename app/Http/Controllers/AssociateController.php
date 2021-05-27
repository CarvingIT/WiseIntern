<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;

class AssociateController extends Controller
{
        function index(Request $request){
	return $request->post();
	$request->validate([
	'name'=>'required',
	'email'=>'required|email',
	'address'=>'required',
	'phone1'=>'required',
	'phone2'=>'required'
	]);
		}
		
	function save(Request $req){
		//print_r($req->input());
		$data=new Associate;
		$data->name=$req->name;
		$data->type=$req->type;
		$data->address=$req->address;
		$data->email=$req->email;
		$data->phone1=$req->phone1;
		$data->phone2=$req->phone2;
		$data->save();
		echo "Data submitted";
	}
		

}
