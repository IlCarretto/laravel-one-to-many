@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-4">Crea nuovo progetto</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="title-container">
                        <label for="title">Titolo del progetto</label>
                        <input
                            class="form-control @error('title')
                        is-invalid
                        @enderror""
                            type="text" name="title" id="title" value="{{ old('title') }}"">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="img-container">
                        <label for="image">Inserisci il file dell'immagine</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-container">
                        <label for="proj_description">Descrizione del progetto</label>
                        <textarea name="proj_description" id="proj_description" rows="10"
                            class="form-control @error('proj_description')
                            is-invalid
                            @enderror">{{ old('proj_description') }}</textarea>
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
    </div>
@endsection
