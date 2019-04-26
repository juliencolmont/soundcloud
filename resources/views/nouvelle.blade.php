@extends('layouts.app')

@section('content')
    <h3>Nouvelle chansons</h3>
    <form action="/create" method="POST" enctype="multipart/form-data">
    {{@csrf_field()}}
        <input type="text" name="nom" placeholder="Nom de la chanson"/><br/>
        <input type="text" name="style" placeholder="Le style"/><br/>
        <input type="file" name="chanson" placeholder=""/>  <br/>      
        <input type="submit" value="Save"  />        
    </form>

@endsection