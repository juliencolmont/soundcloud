<ul id='chansons'>
    @foreach($chansons as $c)
    <li>
        <a class="chanson" data-file='{{$c->fichier}}' href="#"> {{$c->nom}}</a>
        uploadée par : 
        <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</a>
    </li>
    @endforeach
</ul>