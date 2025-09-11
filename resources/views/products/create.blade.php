@extends('layouts.app')

@section('content')
    <h1>Listado de productos</h1>

    <form action="" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        <label for="price">Price:</label>
        <input type="number" name="price">
    </form>
@endsection
