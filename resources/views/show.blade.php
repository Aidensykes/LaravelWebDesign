@extends('layout')

@section('title')

<h1 class="title">{{$project->projectname}}</h1>

@can('update',$project)
    <a href="">Update</a>
@endcan

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

<form method ="POST" action="/projects/{{$project->id}}/tasks" class="box">
  {{csrf_field()}}
    <div class ="field">
        <label class="Label" for =""> New Task </label>
        
        <div class ="control">
        
            <input type ="text" class="input" name="" placeholder="New Task" required>
            
        </div>
        
    <div class ="field">
        <div class ="control">
            <button type="submit" class="button is-link">Add Task</button>
        </div>
    </div>
    
    @include ('errors')
        
</form>

@endsection