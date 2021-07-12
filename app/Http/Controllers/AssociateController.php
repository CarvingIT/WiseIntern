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
				
		return redirect('admin/associatelist');
	}
		
		
		public function edit($id){
			//$data1=Associate::find($id);
			//return view('associate-form',['data'=>$data1]);
			if($id == 'new'){
            $user = new Associate();
		   
        }
        else{
            $user = Associate::find($id);
        }
       // print_r($user); exit;
        return view('associate-form', ['user'=>$user ]);
		
        }
			
				
		
		/* function delete($id){
		
			$data2=Associate::find($id);
			$data2->delete();
			return redirect('/admin/associatelist');
		}*/
		
		public function delete(Request $request){
	$user = Associate::find($request->id);
	  if(!empty($user)){
		if($user->delete()){
                Session::flash('alert-success', 'Person deleted successfully!');
                return redirect('/admin/associatelist');
                }
	  }	
	}

		
	public	function show($id){
		
			$user = Associate::find($id);
        
        //print_r($user); exit;
        return view('associate-view', ['user'=>$user ]);
			
		
		}

}
