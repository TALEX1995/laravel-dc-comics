@extends('layouts.main')


@section('main-content')
  <div class="container">
    <h1>{{ $comic->title }}</h1>
    <div class="d-flex justify-content-between">
      <a href="{{ route('comics.index') }}">Torna ai fumetti</a>
      <form method="POST" action="{{ route('comics.destroy', $comic) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
      </form>
    </div>
  </div>
@endsection
