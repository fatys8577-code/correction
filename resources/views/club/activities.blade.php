@extends('layouts.app')

@section('title', 'Activités')

@section('content')
    <h1>Nos activités</h1>
    <ul>
        @foreach($activities as $activity)
            <li>
                <strong>{{ $activity['title'] }}</strong> —
                {{ $activity['description'] }}
                <a href="{{ route('club.activity.show', ['slug' => $activity['slug']]) }}">
                    En savoir plus
                </a>
            </li>
        @endforeach
    </ul>
@endsection