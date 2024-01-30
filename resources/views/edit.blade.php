<div>
    <h2>Editer une maison !</h2>

    <form method="POST" action="/store">
        @csrf
        <fieldset>

            <legend>Details maison</legend>
            <input type="file"  name="image"/>
            @error('image')
            {{$message}}
            @enderror
            <br>
            <div>
                <input type="text" value="{{old('province')}}" name="province" placeholder="province">
                @error('province')
                {{$message}}
                @enderror
            </div>
            <br>
            <input type="text" value="{{old('ville')}}" name="ville" placeholder="ville">
            @error('ville')
            {{$message}}
            @enderror
            <br>
            <input type="text" name="commune" placeholder="commune">
            @error('commune')
            {{$message}}
            @enderror
            <br>
            <input type="text" value="" name="quartier" placeholder="quartier">
            @error('quartier')
            {{$message}}
            @enderror
            <br>
            <input type="text" value="" name="avenue_rue" placeholder="avenue/rue">
            @error('avenue_rue')
            {{$message}}
            @enderror
            <br>
            <input type="text" value="" name="numero" placeholder="numero">
            @error('numero')
            {{$message}}
            @enderror
            <br>
        </fieldset>
        <fieldset>
            <legend>Partie proprietaire</legend>
            <input type="text" value="" name="nom" placeholder="nom">
            @error('nom')
            {{$message}}
            @enderror
            <br>
            <input type="email" value="" name="email" placeholder="email">
            @error('email')
            {{$message}}
            @enderror
            <br>
            <input type="text" value="" name="telephone" placeholder="telephone">
            @error('telephone')
            {{$message}}
            @enderror
            <br>
        </fieldset>

        <button type="submit">Enregister</button>
    </form>
</div>
