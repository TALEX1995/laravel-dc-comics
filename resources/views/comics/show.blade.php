@extends('layouts.main')


@section('main-content')
  <h1>{{ $comic->title }}</h1>
  <a href="{{ route('comics.index') }}">Torna ai fumetti</a>
@endsection
