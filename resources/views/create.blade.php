@extends('layout')

@section('title')

Create A Project


@endsection

@section('content')

<form method="POST" action="/project">

    {{csrf_field()}}

    <div>
        <input type="text" name="projectname" placeholder="Project Title" required value="{{old('projectname')}}">
    </div>
    
    <div>
        <input type="text" name="projectdescription" placeholder="Project Desc," required  value="{{old('projectdescription')}}">
    </div>
    
    <div>
        <input type="text" name="linkto" placeholder="Project Link" required  value="{{old('linkto')}}">
    </div>
    <div>
        <button type ="submit"> Create A Project </button>
        
        
        @if ($errors -> any())
        
        <div class ="notification is-danger">
        
        <ul> @foreach ($errors->all() as $error)</ul>
        
        <li>{{$error}}</li>
        
        @endforeach
        
        </div>
        
        @endif
        
</form>
@endsection