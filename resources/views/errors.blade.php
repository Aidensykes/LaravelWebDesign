@if ($errors -> any())
        
        <div class ="notification is-danger">
        
        <ul> @foreach ($errors->all() as $error)</ul>
        
        <li>{{$error}}</li>
        
        @endforeach
        
        </div>
        
        @endif