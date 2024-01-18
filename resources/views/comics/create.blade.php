@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Crea una nuova scheda fumetto</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                <form action="{{ route('comics.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select id="type" class="form-select" name="type">
                            <option selected value="">Seleziona</option>
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Salva</button>

                </form>
            </div>
        </div>
    </div>
@endsection
