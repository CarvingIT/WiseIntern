@extends('layouts.wiseintern')
@section('content')

<table id="projects" class="display table responsive">
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
				<td><a href="{{"/ProjectFrontView/".$project['id']}}">{{$project->title}}</a></td>
				<td>{{$project->description}}</td>
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
