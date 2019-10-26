@extends('layout')

@section('title')

Edit A Project


@endsection

@section('content')

<form method="POST" action="/project/{{$project->id}}">

{{method_field('PATCH')}}

    {{csrf_field()}}

    <div>
        <input type="text" name="projectname" placeholder="Project Title" value="{{$project->projectname}}">
    </div>
    
    <div>
        <input type="text" name="projectdescription" placeholder="Project Desc,"value="{{$project->projectdescription}}">
    </div>
    
    <div>
        <input type="text" name="linkto" placeholder="Project Link"value="{{$project->linkto}}">
    </div>
    </form>
    
    
    <form>
    <div>
        <button type ="submit"> Edit A Project </button>
</form>

<form method="POST" action="/project/{{$project->id}}">

{{method_field('DELETE')}}
 {{csrf_field()}}
    <div>
        <button type ="submit"> Delete A Project </button>
</form>

@endsection