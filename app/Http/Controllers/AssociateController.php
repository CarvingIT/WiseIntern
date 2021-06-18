<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use DB;

class AssociateController extends Controller
{
       public function index(){
				$data= Associate::all();
				
				return view('/associatelist',['associates'=>$data]);
	
	
		}
		
public	function save(Request $req){
		//print_r($req->input());
		$req->validate([
		'name'=>'required',
		'address'=>'required',
		'email'=>'required|email',
		'phone1'=>'required',
		'phone2'=>'required'
		]);
		if(empty($req->input('id'))){
            $data = new Associate;
         }
         else{
            $data = Associate::find($req->input('id'));
         }
		
		//$data=new Associate;
		$data->name=$req->name;
		$data->type=$req->type;
		$data->address=$req->address;
		$data->email=$req->email;
		$data->phone1=$req->phone1;
		$data->phone2=$req->phone2;
		$data->save();
				
		return redirect('admin/associate-form');
	}
		
		
		public function edit($id){
			//$data1=Associate::find($id);
			//return view('associate-form',['associates'=>$data1]);
			if($id == 'new'){
            $user = new Associate();
        }
        else{
            $user = Associate::find($id);
        }
        
        return view('associate-form', ['associates'=>$user ]);
        }

			
				
		
		 function delete($id){
		
			$data2=Associate::find($id);
			$data2->delete();
			return redirect('/admin/associatelist');
		}
		
		function show($id){
			$data3=Associate::find($id);
			
			
			
		
		}

}
