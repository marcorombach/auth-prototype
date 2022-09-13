@extends('layout.base')
@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Anmeldung fehlgeschlagen</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Folgender Fehler ist aufgetreten:</p>
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error') ?? ''}}
            </div>
            @endif
        </div>
    </div>
@endsection
