@extends('layouts.default')


@section('title', 'comics')

@endsection


@section('content')

    <a href="{{ route('comics.create')}}">Aggiungi comic</a>

    @foreach($comics as $comic){

        <div class="card">
            <ul>
                <li><h1>{{ $comic->title }}</h1></li>
                <li>{{ $comic->type}}</li>
                <li>
                    <a href="{{route ('comics.show', $comic->id )}}">Mostra dettagli</a>
              
                    <a href="{{route ('comics.edit', $comic->id )}}">Modifica</a>
                </li>

                @include('components.deleteBtn',["id" => $comic->id])
            </ul>
        </div>  
    } 
    @endforeach
@endsection
