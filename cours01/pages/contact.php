<?php
$metatitle = 'Contact - Augustin PECH';
$metadescription = 'Formulaire de contact d&apos;Augustin Pech';
include 'header.php';
    //On démarre une nouvelle session
    session_start();
    //On utilise session_id() pour récupérer l'id de session s'il existe.
    //$id_session = session_id();
    $id_session = date('y-m-d_h:i:s');
    //echo $id_session;
?>
<main class="container">
    <form method="post" action="/cours01/index.php?page=Contact">
        <div class="container" id="fields">
            <fieldset class="border p-3 bg-body-secondary bg-opacity-50 my-3 d-flex flex-column justify-content-evenly">
                <legend>Vos coordonnées :</legend>

                <label for="gender">Votre civilité :</label>
                <!-- mon code est transfobe sinon je n'ai rien à valider -->
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["gender"]) && $_POST["gender"]!= 'male' && $_POST["gender"]!= 'female') {
                    $errMsg = "information GENRE manquante";
                    echo $errMsg;
                } ?></div>
                <select name="gender" id="gender" class="">
                    <option value="other"> Cela ne vous regarde pas </option>
                    <option value="male"> Masculin </option>
                    <option value="female"> Féminin </option>

                </select>

                <label for="nom">Nom :</label>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["nom"]) && empty($_POST["nom"])) {
                    $errMsg = "information NOM manquante";
                    echo $errMsg;
                } ?></div>

                <input type="text" name="nom" id="nom" placeholder="Ex: Mouse" size="32" maxlength="30" autofocus><br>
                
                <label for="prenom">Votre Prénom :</label>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["prenom"]) && empty($_POST["prenom"])) {
                    $errMsg = "information PRENOM manquante";
                    echo $errMsg;
                } ?></div>
                <input type="text" name="prenom" id="prenom" placeholder="Ex: Mickey" size="32" maxlength="30"><br>
                
                <label for="email"> Votre adresse mail :</label>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["email"]) && filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
                    $errMsg = "information EMAIL manquante";
                    echo $errMsg;
                } ?></div>
                <input type="text" name="email" id="email" placeholder="mickey.mouse@disney.com">
            </fieldset>

            <fieldset class="border p-3 bg-body-secondary bg-opacity-50 mb-3 bg">
                <legend>Votre statut :</legend>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["status"]) && empty($_POST["statut"])) {
                    $errMsg = "information SATUT manquante";
                    echo $errMsg;
                } ?></div>
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
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["message"]) && strlen($_POST["message"])<6) {
                    $errMsg = "Minimum 5 caractères";
                    echo $errMsg;
                } ?></div>
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