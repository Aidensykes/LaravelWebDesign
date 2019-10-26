@extends('layout')

@section('title')

Create A Project


@endsection

@section('content')

<form method="POST" action="/project">

    {{csrf_field()}}

    <div>
        <input type="text" name="projectname" placeholder="Project Title">
    </div>
    
    <div>
        <input type="text" name="projectdescription" placeholder="Project Desc,">
    </div>
    
    <div>
        <input type="text" name="linkto" placeholder="Project Link">
    </div>
    <div>
        <button type ="submit"> Create A Project </button>
</form>
@endsection