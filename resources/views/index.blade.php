<a href="/create">Ajouter une maison</a>

@foreach($users as $user)
    <p>
        <h3>Maison</h3>
        <b>Localisation : </b>
        <br>
        <i>Province : {{$user->province}}</i>
        <br>
        <i>Ville : {{$user->ville}}</i>
        <br>
        <i>Commune : {{$user->commune}}</i>
        <br>
        <i>Avenue/rue : {{$user->avenue_rue}}</i>
        <br>
        <i>numero : {{$user->numero}}</i>
    </p>
@endforeach
