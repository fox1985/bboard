@extends('layouts.base')

@section('title', 'Главная')

{{--  если страници не чего нет то не чего и невыводим--}}
@section('main')
    @if(count($bbs) > 0)
    <table class="table table-striped">

        @foreach($bbs as $bb)
        <tr>
            <td><h2>{{ $bb->title }}</h2></td>
            <td>{{ $bb->price }}</td>
            <td><a href="{{ route('detail', ['bb'=> $bb->id]) }}">Подробно</a></td>
        </tr>
        @endforeach

    </table>
    @endif
@endsection('main')


