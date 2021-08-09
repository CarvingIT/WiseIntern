@extends('layouts.wiseintern')

@section('content')

	
<!--<h3 style="text-align:center;"> Projects</h3>-->
<div class="features-wrapper">
        <div class="container">
            <h2 class="textcenter">Projects</h2>
            <div class="row">
                <div class="col-12 col-12-medium"> 


<table id="projects" class="display table responsive" >
            <thead>
                <tr>
				<!--	<th>Id</th>-->
                    <th>Title</th>
                    <th>Description</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
				<tr>
			<!--	<td>{{$project->id}}</td>-->
				<td ><a href="{{"/ProjectDetails/".$project['id']}}">{{$project->title}}</a></td>
				<td>{{$project->description}}</td>
				</tr>
		       @endforeach
				
            </tbody>
        </table>
		
		
			<!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.dropotron.min.js"></script>
    <script src="/js/browser.min.js"></script>
    <script src="/js/breakpoints.min.js"></script>
    <script src="/js/util.js"></script>
    <script src="/js/main.js"></script>

@endsection
