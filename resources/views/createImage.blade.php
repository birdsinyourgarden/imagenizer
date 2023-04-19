@extends('layouts.app')
@section('content')
<div class="containerCreate">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<h2 class="cardTitle mb-4 d-flex flex-wrap row justify-content-center">Add New Image</h2>
					<form class="justify-content-center" action="{{ route('storeImage') }}" method="post">
						@csrf
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-title">Title</span>
							<input type="text" class="form-control" placeholder="title" aria-label="Title" aria-describedby="label-title">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-year">Year</span>
							<input type="text" class="form-control" placeholder="year" aria-labelledby="label-year">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-description">Description</span>
							<textarea name="description" rows="3" class="form-control" placeholder="description" aria-labelledby="label-description"></textarea>
						</div>
						<div class="input-group mb-3">
							<input type="file" name="photo" class="form-control" placeholder="URL photo" aria-labelledby="label-photo">
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
</div>
<div class="container justify-content-center" style="max-width: 62rem">
	<a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/img/return.png" alt="return button"></a>
</div>
@endsection