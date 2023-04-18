@extends('layouts.app')
@section('content')
    <div class="container mt-3">
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary">
            <a href="{{ route('createImage') }}">
                <div class="text-warning">ADD NEW IMAGE</div>
            </a>
        </button>
    </div>
    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($images as $image)
            <div class="card mb-4 m-4" style="width: 20rem;">
                <a href="{{ route('showImage', ['id' => $image->id]) }}">
                <img src="{{ $image->img }}" class="card-img-top mt-3" alt="travel landscape">
                <div class="card-body">
                    <h4 class="card-title">{{ $image->title }}</h4>
                    <h5 class="card-title">{{ $image->year }}</h5>
                    <p class="card-text">{{ $image->description }}</p>
                    <form action="{{ route('deleteImage', ['id' => $image->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <div class="d-flex justify-content-end">
                        <a class="btn text-end mt-2"
                        href="{{ route('editImage', ['id' => $image->id]) }}"><img src="/img/edit.png" alt="edit button"></a>
                        <button type="submit"
                            class="btn text-end mt-2"
                            onclick="return confirm('Are you sure you want to delete this image? {{ $image->name }} - ID {{ $image->id }} ')"><img src="/img/delete.png" alt="delete button">
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="container justify-content-center" style="max-width: 65rem">
        <a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/img/return.png" alt="button back to home view"></a>
        </div>
    </div>
@endsection
