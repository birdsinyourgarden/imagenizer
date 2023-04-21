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
						<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-title">Title</span>
							<input type="text" name="title" class="form-control" aria-label="title" aria-describedby="label-title" maxlength="150" required>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-year">Year</span>
							<input type="number" min="1900" max="{{ date('Y') }}" name="year" class="form-control" aria-label="year" aria-labelledby="label-year" maxlength="4">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-description">Description</span>
							<textarea name="description" rows="3" class="form-control" aria-label="description" aria-labelledby="label-description" maxlength="500"></textarea>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="label-photo">Photo URL</span>
							<input type="text" name="img" class="form-control" aria-label="URL photo" aria-labelledby="label-photo" maxlength="255" required>
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
	<a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/img/return.png" alt="return button"></a>
</div>
@endsection