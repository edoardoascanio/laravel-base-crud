@extends('layouts.default')

@section('title', 'Dettagli comic')

@endsection


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
