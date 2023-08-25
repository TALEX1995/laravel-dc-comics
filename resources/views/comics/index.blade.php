@extends('layouts.main')

@section('main-content')
  @foreach ($comics as $comic)
    <ul>
      <li>{{ $comic->name }}</li>
      <a href="{{ route('comics.show', $comic) }}">Vai ai dettagli del fumetto</a>
    </ul>
  @endforeach
@endsection
