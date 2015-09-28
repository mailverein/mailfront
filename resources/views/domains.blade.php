@extends('app')

@section('content')
<h1>domains:</h1>

foo<br>
bar

<h3>{{ $domain }}
<h4>{{ $masteruser }}

<h5>domains:
<ol>
@foreach ($domains as $domains)
  <li>{{ $domain }}
@endforeach
</ol>

@stop
