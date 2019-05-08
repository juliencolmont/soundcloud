@extends('layouts.app')

@section('content')
    <h3>Nouvelle chansons</h3>
    <form action="/create" data-pjax method="POST" enctype="multipart/form-data">
        <input type="text" name="nom" required placeholder="Nom de la chanson"/><br/>
        <input type="text" name="style" required placeholder="Le style"/><br/>
        <input type="file" name="chanson" required/>  <br/>      
        <input type="submit" value="Upload"  />  
        {{@csrf_field()}}      
    </form>

@endsection