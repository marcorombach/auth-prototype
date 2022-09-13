@extends('layout.base')
@section('content')
    <div class="px-4 mx-5 py-5">
        <h1>OpenID Connect</h1>
        <div class="card">
            <div class="card-body">
                <form method="GET" action="/oidc-login">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block mb-4">Einloggen mit OpenID Connect</button>
                </form>
            </div>
        </div>
    </div>
@endsection
