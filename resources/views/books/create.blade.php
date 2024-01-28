@extends('app')

@section('content')
    <h1>Create</h1>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <button type="submit" value="Create">Créer</button>
    </form>
