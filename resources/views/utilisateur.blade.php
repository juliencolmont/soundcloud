@extends('layouts.app')
@section('content')
    <div id="pjax-container" class="flex-user">
        <div>
        {{$utilisateur->name}}
        </div>
        <main id="pjax-container">
        @auth
<<<<<<< Updated upstream
        @if($utilisateur->id != Auth::id())
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                <a href="/suivi/{{$utilisateur->id}}">Arretez de suivre</a>
            @else
            <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Suivre</a>            
=======
            @if($utilisateur->id != Auth::id())
                @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                    <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Arretez de suivre</a>
                @else
                    <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Suivre</a>            
                @endif
                
>>>>>>> Stashed changes
            @endif
        @endauth
        </main>
        <div>
            <span class="bar">Subscribers</span><span class="number"> {{$utilisateur->jeLesSuit->count()}} </span>
        </div>
        <div>
            <span class="bar">Followers</span><span class="number"> {{$utilisateur->ilsMeSuivent->count()}} </span>
        </div>

    </div>
       
        
        @include("_chansons", ['chansons'=> $utilisateur->chansons])

@endsection