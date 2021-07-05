@extends('layouts.default')

@section('title', 'Dettagli comic')

@endsection

<a href="{{route ('comics.show', $user->id )}}">Homepage</a>

<a href="{{route ('comics.edit', $user->id )}}">Modifica</a>

@include('components.deleteBtn',["comic" => $comic])

@section('content')

@foreach($comics as $comic){
<div class="card">
    <ul>
        <li>{{ $comic->series}}</li>
        <li>{{ $comic->price}}</li>
        <li>{{ $comic->sales_date}}</li>
        <li>{{ $comic->description}}</li>
    </ul>
</div>

}
@endforeach

@endsection

