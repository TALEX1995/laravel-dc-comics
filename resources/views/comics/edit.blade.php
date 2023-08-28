@extends('layouts.main')

@section('tile', 'Edit')

@section('main-content')


  @if ($errors->any())
    <div class="container">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif

  <div class="container">
    <form action="{{ route('comics.update', $comic) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        {{-- Nome --}}
        <h1>Modifica il fumetto</h1>
        <div class="col-6">
          <div class="mb-3">
            <label for="title" class="form-label">Nome fumetto</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
              value="{{ old('title', $comic->title) }}">
            @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        {{-- Price --}}
        <div class="col-6">
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
              min="0" step=".01" value="{{ old('price', $comic->price) }}">
            @error('price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        {{-- Series --}}
        <div class="col-6">
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
              value="{{ old('series', $comic->series) }}">
            @error('series')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        {{-- Type --}}
        <div class="col-6">
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
              value="{{ old('type', $comic->type) }}">
            @error('type')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        {{-- Description --}}
        <div class="col-12">
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
              rows="3">{{ old('description', $comic->description) }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        {{-- Button --}}
        <div class="d-flex justify-content-between">
          <a href="{{ route('comics.index') }}">Indietro </a>
          <button type="submit" class="btn btn-success">Salva</button>
        </div>
      </div>
    </form>
  </div>
@endsection
