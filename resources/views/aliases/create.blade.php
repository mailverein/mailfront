@extends('app')
@section('content')
	<h1>Create new Alias</h1>
	<hr/>
	
	{!! Form::open(['action' => 'AliasController@index']) !!}
		{!! Form::label('localpart', 'Localpart:') !!}
		{!! Form::text('localpart') !!}
		
        # FIXME allow to choose domainid from list
		{!! Form::label('domainid', 'Domain ID:') !!}
		{!! Form::text('domainid') !!}

        # FIXME allow to choose mailboxid from list
		{!! Form::label('mailboxid', 'Destination Mailbox ID:') !!}
		{!! Form::text('mailboxid') !!}

        {!! Form::hidden('enabled', 0, false) !!}
		{!! Form::label('enabled', 'Enabled:') !!}
		{!! Form::checkbox('enabled', 1, true) !!}

        {!! Form::submit('Add Alias') !!}
	{!! Form::close() !!}
@stop

