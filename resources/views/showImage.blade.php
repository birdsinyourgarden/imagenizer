@extends('layouts.app')
@section('content')
<div class="container justify-content-center" style="max-width: 36rem">
		<div class="card">
			<img class="card-img-top" src="{{ $image->img }}" alt="travel landscape">
			<div class="card-body">
				<h1 class="text-center mb-2">{{ $image->title }}</h1>
				<h2 class="text-center mb-4">{{ $image->year }}</h2>
				<h2>{{ $image->description }}</h2>
			</div>
		</div>
	</div>	
	<a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/img/return.png"></a>
</div>
@endsection