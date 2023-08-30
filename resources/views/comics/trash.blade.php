@extends('layouts.main')

@section('title', 'Eliminati')

@section('main-content')
  <div class="container">
    @if (session('restore'))
      <div class="alert alert-success mt-4">
        <span>{{ session('restore') }}</span>
      </div>
    @endif
    <div class="d-flex justify-content-end mt-3">
      <a class="btn btn-dark" href="{{ route('comics.index') }}">Torna Ai fumetti</a>
    </div>
    <ul>
      @foreach ($comics as $comic)
        <li class="d-flex justify-content-between mt-3">
          <div>{{ $comic->title }}</div>

          <form action="{{ route('comics.restore', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button class="btn btn-success">Ripristina</button>
          </form>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
