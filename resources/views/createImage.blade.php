@extends('layouts.app')
@section('content')
	<div class="containerCreate">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="cardBorder">
					<div class="card">
						<div class="card-body">
							<h2 class="cardTitle mb-4 d-flex flex-wrap row justify-content-center">Add new image</h2>
								<form class="justify-content-center" action="{{ route('storeImage') }}" method="post">
									@csrf
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">Title</span>
									<input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="title">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">Year</span>
									<input type="text" name="year" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="year">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">Description</span>
									<input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="description">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">Photo</span>
									<input type="text" name="img" class="form-control uploadPhoto" aria-label="Sizing example input" aria-describedby="inputGoup-sizing-default" placeholder="URL photo">
								</div>
								<div class="btnCreate text-end">
									<button type="submit" class="btn" value="create"><img src="/images/save.png" alt="save button"></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container justify-content-center" style="max-width: 62rem">
        <a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/images/return.png" alt="return button"></a>
  </div>
@endsection