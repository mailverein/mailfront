@extends('app')

@section('content')
<h1>aliases:</h1>

<h5>aliases:
<ol>
@foreach ($aliases as $alias)
  <li>{{ $alias->id }}: <a href="{{ action('DomainsController@show', [$alias->id]) }}">{{ $alias->fqdn }}</a> - {{ $alias->enabled }}
@endforeach
</ol>

@stop

