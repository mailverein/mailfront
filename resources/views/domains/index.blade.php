@extends('app')

@section('content')
<h1>domains:</h1>

foo<br>
bar

<h5>domains:
<ol>
@foreach ($domains as $domain)
  <li>{{ $domain->id }}: <a href="{{ action('DomainsController@show', [$domain->id]) }}">{{ $domain->fqdn }}</a> - {{ $domain->enabled }}
@endforeach
</ol>

@stop
