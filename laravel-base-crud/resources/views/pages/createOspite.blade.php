@extends('layouts.main_layout')
@section('content')
    <div id="createOspite">
        <div class="container flex_col align_cen">
            <h1>Inserisci un nuovo ospite</h1>

            <form class="form_container flex_col" action="{{ route('storeOspite') }}" method="post">

                @csrf
                @method('POST')

                <div class="label_row flex">
                    <label for="name">Nome: </label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="label_row flex">
                    <label for="lastname">Cognome: </label>
                    <input type="text" name="lastname" id="lastname">
                </div>

                <div class="label_row flex">
                    <label for="date_of_birth">Data di nascita: </label>
                    <input type="date" name="date_of_birth" id="date_of_birth">
                </div>

                <div class="label_row flex">
                    <label for="document_type">Tipo di documento: </label>
                    <input type="text" name="document_type" id="document_type">
                </div>

                <div class="label_row flex">
                    <label for="document_number">Documento numero: </label>
                    <input type="text" name="document_number" id="document_number">
                </div>

                <button class="new" type="submit">Inserisci</button>
            </form>


            {{-- <label for="lastname"></label>
                <input type="date" name="lastname" id="lastname">

                <label for="lastname"></label>
                <input type="date" name="lastname" id="lastname"> --}}

        </div>
    </div>
    </div>
@endsection
