@extends('layouts.default')


@section('title', 'comics')

@endsection


@section('content')

    <a href="{{ route('user.create')}}">Aggiungi comic</a>

    @foreach($comics as $comic){

        <div class="card">
            <ul>
                <li><h1>{{ $comic->title }}</h1></li>
                <li>{{ $comic->type}}</li>
                <li>
                    <a href="{{route ('comics.show', $user->id )}}">Mostra dettagli</a>
              
                    <a href="{{route ('comics.edit', $user->id )}}">Modifica</a>
                </li>

                @include('components.deleteBtn',["id" => $comic->id])
            </ul>
        </div>  
    } 
    @endforeach

@endsection
