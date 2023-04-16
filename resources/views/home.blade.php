@extends('layouts.app')

@section('content')
    <div>
        <button class="btn btn-primary">
            <a href="{{ route('createImage') }}">
                <div class="text-warning">ADD NEW IMAGE</div>
            </a>
        </button>
    </div>
    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($images as $image)
            <div class="card" style="width: 18rem;">
                <img src="{{ $image->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $image->title }}</h5>
                    <h5 class="card-title">{{ $image->year }}</h5>
                    <p class="card-text">{{ $image->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    </div>
    @endforeach
@endsection
