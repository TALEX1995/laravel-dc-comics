@extends('layouts.main')


@section('main-content')
  <div class="container">
    <h1>{{ $comic->title }}</h1>
    <div class="d-flex justify-content-between">
      <a href="{{ route('comics.index') }}">Torna ai fumetti</a>
      <form method="POST" action="{{ route('comics.destroy', $comic) }}" id="form-delete" data-name="{{ $comic->title }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script defer>
    const deleteForm = document.getElementById('form-delete');

    deleteForm.addEventListener('submit', e => {
      e.preventDefault();
      const comicTitle = deleteForm.dataset.name;
      const hasConfirmed = confirm(`Sei sicuro di voler eliminare il fumetto ${comicTitle}?`);
      if (hasConfirmed) deleteForm.submit();
    });
  </script>
@endsection
