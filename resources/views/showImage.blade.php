@extends('layouts.app')
@section('content')
<div class="container justify-content-center" style="max-width: 36rem">
	<div class="cardBorder">
		<div class="card">
			<img class="card-img-top" src="{{ $image->img }}" alt="...">
			<div class="card-body">
				<h1 class="text-center mb-2">{{ $image->name }}</h1>
				<h3 class="text-center mb-4"><span class="h2">{{ $image->year }}</span></h3>
				<h2>{{ $image->description }}</h2>
			</div>
		</div>
	</div>	
	<a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/images/return.png"></a>
</div>
@endsection