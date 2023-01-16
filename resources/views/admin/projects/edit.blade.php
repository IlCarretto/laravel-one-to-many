@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-4">Modifica il tuo progetto: {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="title-container">
                        <label for="title">Titolo del progetto</label>
                        <input
                            class="form-control @error('title')
                        is-invalid
                        @enderror""
                            type="text" name="title" id="title" value="{{ old('title', $project->title) }}"">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="image-container">
                        <label for="image">Modifica l'immagine</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image')
                            is-invalid
                        @enderror">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="image-preview text-center">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="" class="w-25">
                        @else
                            <p class=mt-3>No images found yet</p>
                        @endif
                    </div>
                    <div class="text-container">
                        <label for="proj_description">Descrizione del progetto</label>
                        <textarea name="proj_description" id="proj_description" rows="10"
                            class="form-control @error('proj_description')
                            is-invalid
                            @enderror">{{ old('proj_description', $project->proj_description) }}</textarea>
                        @error('proj_description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Invia</button>
                </form>
            </div>
        </div>
    @endsection
