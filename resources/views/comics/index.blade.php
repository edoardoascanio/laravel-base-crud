@extends('layouts.default')

@section('title', 'comics')

@endsection


@section('content')

    @foreach($comics as $comic){

    <div class="card">
        <ul>
            <li><h1>{{ $comic->title }}</h1></li>
            <li>{{ $comic->type}}</li>
            <li><a href="{{route ('comics.show', $user->id )}}">Mostra dettagli</a></li>
        </ul>
    </div>
    }
    @endforeach

@endsection
