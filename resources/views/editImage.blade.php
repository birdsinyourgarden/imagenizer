@extends('layouts.app')
@section('content')
<div class="containerEdit">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<h2 class="cardTitle mb-4 d-flex flex-wrap row justify-content-center">Edit Image</h2>
					<form class="justify-content-center" action="{{ route('updateImage', $image->id) }}" method="post">
						@method('PATCH')
						@csrf
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-title">Title</span>
							<input type="text" name="title" class="form-control" aria-label="title" aria-describedby="label-title" value="{{$image->title}}" maxlength="150" required>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-year">Year</span>
							<input type="text" name="year" class="form-control" aria-label="year" aria-describedby="label-year" value="{{$image->year}}" maxlength="4">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-description">Description</span>
							<textarea name="description" rows="3" class="form-control" aria-label="description" aria-describedby="label-description" maxlength="500">{{$image->description}}</textarea>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-photo">Photo</span>
							<input type="text" name="img" class="form-control" aria-label="photo" aria-describedby="label-photo" value="{{$image->img}}">
						</div>
						<div class="btnCreate text-end">
							<button type="submit" class="btn" value="create"><img src="/img/save.png" alt="save button"></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container justify-content-center" style="max-width: 62rem">
	<a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/img/return.png" alt="button back to home view"></a>
</div>
@endsection