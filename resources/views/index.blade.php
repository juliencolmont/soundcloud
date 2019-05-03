@extends('layouts.app')

@section('content')
    <h1>Les chansons</h1>
    @include("_chansons", ['chansons'=> $chansons]) 
@endsection