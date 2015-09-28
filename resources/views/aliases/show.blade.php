@extends('app')

@section('content')
<h1>Alias: {{ $alias->id}} - {{ $alias->localpart }} @ {{ $alias->domainid }}</h1>

<ul>
	<li>ID:<br/>{{ $alias->id }}</li>
	<li>localpart:<br/>{{ $alias->localpart }}</li>
	<li>mailboxid:<br/>{{ $alias->mailboxid }}</li>
	<li>domainid:<br/>{{ $alias->domainid }}</li>
	<li>enabled:<br/>{{ $alias->enabled }}</li>
</ul>
@stop
