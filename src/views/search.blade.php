@extends('core::template')

@section('title','Search')

@section('content')
<main class="search">
	<div class="row">
		{{ Form::open(array('method' => 'get')) }}
		{{ Form::text('q',Input::get('q')) }}
		{{ Form::submit('Search') }}
		{{ Form::close() }}
	</div>
	@if($q)
	<div class="row">
		@if($results)
			@foreach($results as $result)
				<a href="{{ $result->link() }}">{{ $result->name }}</a><br />
			@endforeach
		@else
		No results found
		@endif
	</div>
	@endif
</main>
@stop