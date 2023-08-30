@extends('layouts.main')

@section('main-content')
  <div class="container">
    @if (session('delete'))
      <div class="alert alert-success mt-4">
        <span>{{ session('delete') }}</span>
      </div>
    @endif
    <div class="d-flex justify-content-end mt-3"><a href="{{ route('comics.create') }}" class="btn btn-secondary">Aggiungi un
        fumetto</a></div>
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-3 mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic->series }}</h6>
              <p class="card-text"><strong>Description:</strong> {{ $comic->description }}</p>
              <p class="card-text"><strong>Artists:</strong> {{ $comic->artists }}</p>
              <p class="card-text"><strong>Writers:</strong> {{ $comic->writers }}</p>
              <a href="{{ route('comics.show', $comic) }}">Vai ai dettagli del fumetto</a> <br>
              <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-end">
      <a class="btn btn-warning my-3" href="{{ route('comics.trash') }}">Cestino</a>
    </div>
  </div>
@endsection
