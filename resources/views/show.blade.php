@extends('layout')

@section('title')

<h1 class="title">{{$project->projectname}}</h1>


@endsection

@section('content')

<h2 class="desc">{{$project->projectdescription}}</h2>
<h3 class="link"> <a href="{{$project->linkto}}"> {{$project->linkto}} </a> </h3>

@if ($project->tasks->count())

<div>

@foreach ($project->tasks as $task)

<li>{{$task -> description}}</li>

@endforeach

</div>

@endif

@endsection