@extends('layouts.baseLayout');

@section('content')

	@if ($type == "number")
	<h1>Numeri da 0 a 9</h1>
	@else
	<h1>Lettere dell'alfabeto</h1>
	@endif

	@foreach ($results as $element)
		<div class="box {{ $type }}">
			{{ $element }}
		</div>
	@endforeach

@endsection