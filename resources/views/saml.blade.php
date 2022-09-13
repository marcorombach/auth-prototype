@extends('layout.base')
@section('content')
    <div class="px-4 mx-5 py-5">
        <h1>SAML</h1>
        <div class="card">
            <div class="card-body">
                <form method="GET" action="/saml-login">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block mb-4">Einloggen mit SAML</button>
                </form>
            </div>
        </div>
    </div>
@endsection
