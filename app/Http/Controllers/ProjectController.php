<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use DB;
use Session;

class ProjectController extends Controller
{
	
	 public function index(){
				$data= Project::all();
				
				return view('/projectlists',['projects'=>$data]);
	
	
		}
		

    public	function save(Request $req){
		
		
		$req->validate([
		'title'=>'required',
		'description'=>'required',
		]);
		if(empty($req->input('id'))){
            $data = new Project;
         }
         else{
            $data = Project::find($req->input('id'));
         }
		
		
		$data->title=$req->title;
		$data->description=$req->description;
		$data->save();
		
		return redirect('admin/projectlists');
	}
	public	function show($id){
		
			$user = Project::find($id);
        
        //print_r($user); exit;
        return view('project-view', ['user'=>$user ]);
	}
	
	public function edit($id){
			//$data1=Associate::find($id);
			//return view('associate-form',['data'=>$data1]);
			if($id == 'new'){
            $user = new Project();
		   
        }
        else{
            $user = Project::find($id);
        }
       // print_r($user); exit;
        return view('projectform', ['user'=>$user ]);
		
        }
		
		public function delete(Request $request){
	$user = Project::find($request->id);
	  if(!empty($user)){
		if($user->delete()){
                Session::flash('alert-success', 'Person deleted successfully!');
                return redirect('/admin/projectlists');
                }
	  }	
		
		}
		

}
