@extends('layouts.app')


@section('content')
    <div class="container py-5 d-flex align-items-center justify-content-between">
        <h1>La lista dei fumetti</h1>
        <div>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Crea una scheda fumetto</a>
        </div>
    </div>
    <section class="comics-part py-5">
        <div class="container">
            <div class="d-flex flex-wrap gap-3">
                @foreach ($comics as $comic)
                    <div class="w-25 h-50">
                        <img src="{{ $comic['thumb'] }}" alt="" class="w-75">
                        <h5>{{ $comic['title'] }}</h5>
                        <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli</a>
                        <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>

                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-delete" type="submit" data-title="{{ $comic->title }}">Cancella</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        @include('partials.delete_modal')
    </section>
@endsection
