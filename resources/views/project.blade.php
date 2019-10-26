@extends('layout')

@section('title')

My Projects



@endsection

@section('content')
@foreach ($projects as $project)

<li> <a href="{{$project->id}}"> {{$project->projectname}} </a> </li>

@endforeach
@endsection