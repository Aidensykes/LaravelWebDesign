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
    
    <li>
    
        <form method="POST" action="/tasks/id">
        
        {{csrf_field()}}

        
            @method('PATCH')
    
            <label class="checkbox" for="completed">
            
            <input type ="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
    
        </form>
    
        {{$task -> description}}
    
    </li>
    
    @endforeach
    
    </div>

@endif

@endsection