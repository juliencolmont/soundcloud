@extends('layouts.app')

@section('content')
    <h3>C'est partis pour écouter des chansons</h3>
    <a href="" id="testajax">Testons l'ajax</a>
    <div id="aremplir">
    
    </div>
    @include("_chansons", ['chansons'=> $chansons])
    
@endsection