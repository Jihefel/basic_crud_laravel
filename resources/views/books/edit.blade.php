@extends('app')

@section('content')
    <h1>Edit</h1>
    <form action="{{ route('books.update', $book) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $book->title }}">
        <button type="submit">Modifier</button>
        
    </form>
