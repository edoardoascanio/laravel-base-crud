@extends('layouts.default')

@section('title', 'Nuovo comic')

@endsection

@section('content')

<form action="{{ route('user.store')}} "method="post">

    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <label for="type">Type</label>
    <input type="text" name="type" id="type">

    <label for="series">Series</label>
    <input type="text" name="series" id="series">

    <label for="price">Price</label>
    <input type="text" name="price" id="price">

    <label for="sales_date">Sales_date</label>
    <input type="text" name="sales_date" id="sales_date">

    <label for="description">Description</label>
    <input type="text" name="description" id="description">

    <input type="submit" value="Invia">
</form>

@endsection

