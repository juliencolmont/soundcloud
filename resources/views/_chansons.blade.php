<h1 class="title-chanson">Les chansons</h1>
<div class="content-chanson" id='chansons'>

    @foreach($chansons as $c)
    <div class="flex-column">
        <div>
            <img src="{{$c->photo}}"/>
        </div>
        <diV>
        <a class="chanson" data-file='{{$c->fichier}}' href="#"> {{$c->nom}}</a>
        
            uploadée par :
            <a href="/utilisateur/{{$c->utilisateur->id}}" data-pjax>{{$c->utilisateur->name}}</a>  
        </div>
    </div>
    @endforeach
</div>
