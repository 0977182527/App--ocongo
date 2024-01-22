<div>
    <h2>Ajouter une nouvelle maison !</h2>

    <form method="POST" action="/user-space">
        @csrf

        <fieldset>
            <legend>Details maison</legend>
            <input type="text" value="" name="province" placeholder="province">
            <br>
            <input type="text" value="" name="ville" placeholder="ville">
            <br>
            <input type="text" value="" name="quartier" placeholder="quartier">
            <br>
            <input type="text" value="" name="numero" placeholder="numero">
            <br>
        </fieldset>
        <fieldset>
            <legend>Partie proprietaire</legend>
            <input type="text" value="" name="name" placeholder="nom">
            <br>
            <input type="email" value="" name="telephone" placeholder="email">
            <br>
            <input type="tel" value="" name="telephone" placeholder="telephone">
            <br>
        </fieldset>

        <button type="submit">Enregister</button>
    </form>
</div>
