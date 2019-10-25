@extends('layout')
@section('title')

Todo

@endsection

@section('content')

<h1> Sending Data to Views </h1>

<ul>

    @foreach ($tasks as $task)
        <li> {{$task}} </li>
    @endforeach
</ul>

@endsection
