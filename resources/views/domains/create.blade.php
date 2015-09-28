@extends('app')
@section('content')
	<h1>Create new Domain</h1>
	<hr/>
	
	{!! Form::open(['action' => 'DomainsController@index']) !!}
		{!! Form::label('fqdn', 'FQDN:') !!}
		{!! Form::text('fqdn') !!}
		
        {!! Form::hidden('enabled', 0, false) !!}
		{!! Form::label('enabled', 'Enabled:') !!}
		{!! Form::checkbox('enabled', 1, true) !!}

        {!! Form::submit('Add Domain') !!}
	{!! Form::close() !!}
@stop
