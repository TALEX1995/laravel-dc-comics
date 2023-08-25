@extends('layouts.main')

@section('main-content')
  <div class="container">
    <div class="d-flex justify-content-end mt-3"><a href="{{ route('comics.create') }}" class="btn btn-secondary">Aggiungi un
        fumetto</a></div>
    @foreach ($comics as $comic)
      <ul>
        <li>{{ $comic->name }}</li>
        <a href="{{ route('comics.show', $comic) }}">Vai ai dettagli del fumetto</a>
      </ul>
    @endforeach
  </div>
@endsection
