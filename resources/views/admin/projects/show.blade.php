@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="mt-3 d-flex justify-content-between">
            <h5>{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>
        <div class="text-center">
            @if ($project->image)
                <img class="w-25" src="{{ asset('storage/' . $project->image) }}" alt="">
            @else
                <p>Image not available</p>
            @endif
        </div>
        <p class="mt-3">{{ $project->proj_description }}</p>
    </div>
@endsection
