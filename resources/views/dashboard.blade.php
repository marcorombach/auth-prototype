@extends('layout.base')
@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Anmeldung erfolgreich</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Hallo {{ Auth::user()->fullname }}!</p>
            <p class="lead mb-4">Ihr Username lautet: {{ Auth::user()->username }}</p>
            <p class="lead mb-4">Ihre E-Mail-Adresse lautet: {{ Auth::user()->email }}</p>
        </div>
    </div>
@endsection
