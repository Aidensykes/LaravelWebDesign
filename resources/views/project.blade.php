@extends('layout')

@section('title')

My Projects


@foreach ($projects as $project)

<li>{{$project->projectname}}</li>

@endforeach

@endsection
