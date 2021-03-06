@extends('layouts.app')

@section('content')
	@include('inc.addmembertab')
	<div class="addCSVForm">
			{!! Form::open(['action' => ['AddMemberController@importCSV'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			<div class="form-group">
					{{Form::label('list_members','Members')}}
					{{Form::file('list_members',['class' => 'form-control-file'])}}
			</div>
			{{Form::hidden('_method', 'POST')}}
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			{!! Form::close() !!}
	</div>
</div>
@endsection