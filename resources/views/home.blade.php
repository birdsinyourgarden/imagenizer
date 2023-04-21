@extends('layouts.app')
@section('content')
<div class="container mt-3">
    @guest
    <div class="d-flex justify-content-center">
        <div class="d-flex">
            <a class="btn btn-secondary mx-4" href="{{ route('login') }}" role="button">{{ __('Login') }}</a>
            <a class="btn btn-primary" href="{{ route('register') }}" role="button">{{ __('Register') }}</a>
        </div>
    </div>
    @else
    <div class="d-flex justify-content-center">
        <a class="btn btn-secondary text-uppercase" href="{{ route('createImage') }}" role="button">
            Add new image
        </a>
    </div>
    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($images as $image)
        @if ($image->id_user == Auth::id())
        <div class="card mb-4 m-4" style="width: 20rem;">
            <a href="{{ route('showImage', ['id' => $image->id]) }}">
            <img src="{{ $image->img }}" class="card-img-top mt-3" alt="travel landscape">
            <div class="card-body">
                <h4 class="card-title">{{ $image->title }}</h4>
                <h5 class="card-title">{{ $image->year }}</h5>
                <p class="card-text">{{ $image->description }}</p>
                <form
                    id="deleteImageForm{{ $image->id }}"
                    onsubmit="deleteImage(event)"
                    method="POST"
                    action="{{ route('deleteImage', ['id' => $image->id]) }}"
                    data-id="{{ $image->id }}"
                >
                    @method('DELETE')
                    @csrf
                    <div class="d-flex justify-content-end">
                        <a class="btn text-end mt-2" href="{{ route('editImage', ['id' => $image->id]) }}">
                            <img src="/img/edit.png" alt="edit button">
                        </a>
                        <button type="submit" class="btn text-end mt-2">
                            <img src="/img/delete.png" alt="delete button">
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endguest
</div>
@endsection