<?php
$metatitle = 'Contact - Augustin PECH';
$metadescription = 'Formulaire de contact d&apos;Augustin Pech';
include 'header.php';
?>
<main class="container">
    <form method="post" action="/cours01/index.php?page=traitement">
        <div class="container" id="fields">
            <fieldset class="border p-3 bg-body-secondary bg-opacity-50 my-3 d-flex flex-column justify-content-evenly">
                <legend>Vos coordonnées :</legend>
                <label for="prenom">Votre civilité :</label>
                <select name="gender" id="gender" class="">
                    <option value="male"> Masculin </option>
                    <option value="female"> Féminin </option>
                    <option value="camel"> Cela ne vous regarde pas </option>
                </select>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="Ex: Mouse" size="32" maxlength="30" autofocus><br>
                <label for="prenom">Votre Prénom :</label>
                <input type="text" name="prenom" id="prenom" placeholder="Ex: Mickey" size="32" maxlength="30"><br>
                <label for="email"> Votre adresse mail :</label>
                <input type="email" name="email" id="email" placeholder="mickey.mouse@disney.com">
            </fieldset>

            <fieldset class="border p-3 bg-body-secondary bg-opacity-50 mb-3 bg">
                <legend>Votre statut :</legend>
                <p>
                    Etes-vous :
                    <input type="radio" name="statut" value="particulier" id="particulier">
                    <label for="particulier">Un particulier ?</label>
                    <input type="radio" name="statut" value="entreprise" id="entreprise">
                    <label for="entreprise">Une entreprise ?</label>
                    <input type="radio" name="statut" value="association" id="association">
                    <label for="association">Une association ?</label>
                    <input type="radio" name="statut" value="etat" id="etat">
                    <label for="etat">Un représentant de l'état ?</label>
                </p>
            </fieldset>
            <fieldset class="border p-3 bg-body-secondary bg-opacity-50 mb-3">
                <legend>Votre objectif :</legend>
                <label for="mission">Pour quel type de mission souhaitez-vous une intervention ?</label>
                <select name="mission" id="mission">
                    <option value="evaluation">Diagnostique</option>
                    <option value="upgrade">Remise à niveau</option>
                    <option value="maintenance">Maintenance continue</option>
                    <option value="depannage">Dépannage ponctuel</option>
                </select><br>
                <label for="message">Votre Message :</label>
                <textarea name="message" id="message" style="width: 100%;" rows="10"></textarea>
            </fieldset>
            <fieldset class="d-flex justify-content-end mb-3">
                <div id="submit">
                    <input type="submit" value="ENVOYER">
                </div>
            </fieldset>
        </div>
    </form>
</main>


<?php
include 'footer.php';
?>