@extends('layout.base')
@section('content')
    <div class="px-4 mx-5 py-5">
        <h1>RADIUS</h1>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/radius/login">
                    @csrf
                    <div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control" />
                        <label class="form-label" for="username">Benutzername</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Passwort</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Einloggen mit RADIUS</button>
                </form>
            </div>
        </div>
    </div>
@endsection
