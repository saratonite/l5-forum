@extends('forum.layout.main')

@section('main')
<h3>Questions</h3>

	@if(count($threads))
	   @foreach($threads as $thread)
	   <div class="media">
		  <div class="media-left">
		    <a href="#">
		      <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTBlNzgxMTZjYyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MGU3ODExNmNjIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40NzY1NjI1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
		    	<p>{{$thread->user->name}}</p>
		    </a>
		  </div>
		  <div class="media-body">
		  	<p style="float:right" class="text-muted">Posted by <a href="{{ url('authors/'.$thread->user->id) }}">{{$thread->user->name}} </a> on {{ Carbon\Carbon::parse($thread->created_at)->format('d-m-Y')}} </p>
		    <h4 class="media-heading"><a href="{{ url('question/'.$thread->id) }}">{{$thread->title}}</a></h4>
		    <p>{{ str_limit($thread->content,160) }}</p>
		    <p style="float:right"><a href="{{ url('question/'.$thread->id) }}#write">Write Answer?</a></p>
		  </div>
		</div>
	   @endforeach
	   @else
		<p class="alert alert-info"> No questions found. <a class="btn btn-success btn-sm" href="{{ url('ask') }}"> Ask one ?</a></p>
	@endif

	{!! $threads->render() !!}
@stop