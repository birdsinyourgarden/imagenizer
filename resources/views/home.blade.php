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
                    <form action="{{ route('deleteImage', ['id' => $image->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <div class="d-flex justify-content-end">
                        <a class="btn text-end mt-2"
                        href="{{ route('editImage', ['id' => $image->id]) }}"><img src="/images/edit.png" alt="edit button"></a>
                        <button type="submit"
                            class="btn-adm m-1 d-flex justify-content-center align-items-center"
                            onclick="return confirm('Are you sure you want to delete this image? {{ $image->name }} - ID {{ $image->id }} ')"><img src="/images/delete.png" alt="delete button">
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
