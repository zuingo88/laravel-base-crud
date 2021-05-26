@extends('layouts.main_layout')
@section('content')
    <div id="ospite">
        <div class="container">
            <h1>{{ $ospite->name }} {{ $ospite->lastname }}</h1>
            <h3>Identificativo: {{ $ospite->id }}</h3>
            <h3>Data di nascita: {{ $ospite->date_of_birth }}</h3>
            <h3>Tipo id documento: {{ $ospite->document_type }}</h3>
            <h3>Documento numero: {{ $ospite->document_number }}</h3>
            <h3>Creato il: {{ $ospite->created_at }}</h3>
            <h3>Ultimo aggiornamento: {{ $ospite->updated_at }}</h3>
        </div>
    </div>
@endsection
