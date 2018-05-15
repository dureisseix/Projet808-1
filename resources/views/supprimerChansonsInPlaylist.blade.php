@extends('templates.template1')

@section('content')

    <h1>SELECTIONNEZ LES CHANSONS A SUPPRIMER POUR " {{$playlist->titre}} "</h1>
<div id="gridartistes">
        @foreach($playlist->contient as $chanson)
            <form action='/playlist/{{$playlist->id}}/deleteChansonsInPlaylist' method='POST'>    
                @csrf
                 <div class="main3">
                    <a href='/chanson/{{$chanson->id}}'><img src='{{$chanson->pochette}}'></a><br>
                    <audio controls="controls"> <source src="/music/Friday.mp3" type="audio/mp3" />Votre navigateur n'est pas compatible</audio><br>
                    <a href='/chanson/{{$chanson->id}}'><span class="artistealbum">{{$chanson->titre}}</span> <br>{{$chanson->album->titre}} - {{$chanson->album->artiste->nom}}</a><br>
                    <input type='hidden' name='idPlaylist' value='{{$playlist->id}}'/>
                    <input type='hidden' name='idChanson' value='{{$chanson->id}}'/> 
                    <input class="bouton2" type='submit' name='supprimerChansonsDansPlaylist' value='Supprimer'/>
                </div>
            </form>
        @endforeach
</div>
@endsection