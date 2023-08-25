@extends('layouts.main')

@section('title', 'Create Comics')


@section('main-content')
  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
      <div class="row">
        {{-- Nome --}}
        <h1>Inserisci il nuovo Fumetto</h1>
        <div class="col-6">
          <div class="mb-3">
            <label for="title" class="form-label">Nome fumetto</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
        </div>
        {{-- Price --}}
        <div class="col-6">
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" min="0" value="0"
              step=".01">
          </div>
        </div>
        {{-- Series --}}
        <div class="col-6">
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
          </div>
        </div>
        {{-- Type --}}
        <div class="col-6">
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
          </div>
        </div>
        {{-- Description --}}
        <div class="col-12">
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
        </div>
        {{-- Button --}}
        <div>
          <button type="submit" class="btn btn-success">Salva</button>
        </div>
      </div>
    </form>
  </div>
@endsection
