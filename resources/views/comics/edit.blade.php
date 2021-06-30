@extends('layouts.default')

@section('title', 'Modifica comic')

@endsection

@section('content')

<form action="{{ route ('comics.update', $comic->id) }}" method="post">

    @csrf

    @method('PATCH')

    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{$comic->title}}">

    <label for="type">Type</label>
    <input type="text" name="type" id="type" value="{{$comic->type}}">

    <label for="series">Series</label>
    <input type="text" name="series" id="series" value="{{$comic->series}}">

    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{$comic->price}}">

    <label for="sales_date">Sales_date</label>
    <input type="text" name="sales_date" id="sales_date" value="{{$comic->sales_date}}">

    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$comic->description}}">

    <input type="submit" value="Salva">
</form>

@endsection
