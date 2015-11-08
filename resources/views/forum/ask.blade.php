@extends('forum.layout.main')

@section('main')
<h3>Ask Question</h3>
<form method="post" action="{{ url('ask') }}">
	@if(Session::has('message'))
		<p class="alert alert-success">{{ Session::get('message') }}</p>
	@endif
{{csrf_field()}}
	<div>
	<label>Title</label>
	<input placeholder="Title" name="title" type="text" class="form-control">
	@if($errors->has('title'))
		<span>{{ $errors->first('title') }}</span>
	@endif	
	</div>
	<div>
		<label>Explain</label>
	<textarea placeholder="" name="content" class="form-control"></textarea>
	@if($errors->has('title'))
		<span>{{ $errors->first('title') }}</span>
	@endif	
	</div>
	

	<div style="margin-top:10px;">
		<input class="btn btn-success" type="submit" >
	</div>
</form>
@endsection

