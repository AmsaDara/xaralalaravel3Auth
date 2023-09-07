@extends("layouts.master")

@section("contenu")

<div class="row">
    <div class="col-12 p-4">
       
            <h1 class="display-3">Bienvenue, <strong>{{ userFullName() }}</strong></h1>
            @foreach ( auth()->user()->roles as $role )
                <p>{{ $role->nom }}</p>
            @endforeach
            <p class="lead">Page Accueil</p>
    </div>
</div>

@endsection