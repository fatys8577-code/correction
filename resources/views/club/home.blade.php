@extends('layouts.app')

@section('content')
    <h1>Bienvenue sur notre Club</h1>
    <p>Découvrez nos activités et rejoignez-nous !</p>
    <a href="{{ route('club.activities') }}">Voir les activités</a>
@endsection