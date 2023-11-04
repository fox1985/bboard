@extends('layouts.base')
@section('main')

@section('title', $bb->title)

<div class="container">

    <h2>{{ $bb->title }}</h2>
    <p>{{$bb->content}}</p>
    <p>{{$bb->price }} Цена</p>
    <p>Автор:{{ $bb->user->name }}</p>
    <p><a href="{{ route('index') }}">На перечень обявлений</a></p>

</div>

@endsection('main')
