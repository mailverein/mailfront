@extends('app')

@section('content')
<h1>Domain: {{ $domain->fqdn }}</h1>

<ul>
	<li>ID:<br/>{{ $domain->id }}</li>
	<li>FQDN:<br/>{{ $domain->fqdn }}</li>
	<li>enabled:<br/>{{ $domain->enabled }}</li>
</ul>
@stop
