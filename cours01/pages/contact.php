<?php
$metatitle = 'Contact - Augustin PECH';
$metadescription = 'Formulaire de contact d&apos;Augustin Pech';
include 'header.php';
    //On démarre une nouvelle session
    session_start();
    //On utilise session_id() pour récupérer l'id de session s'il existe.
    //$id_session = session_id();
    $id_session = date('y-m-d_h:i:s');
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
      } else {
        $_SESSION['count']=$_SESSION['count']+1;
      }
      $formErrors = array_fill_keys(array_keys($_POST), 'ok');

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
                    $formErrors["gender"]= "information GENRE manquante";
                    echo $formErrors["gender"];
                } ?></div>
                <select name="gender" id="gender" class="">
                    <option value="other"> Cela ne vous regarde pas </option>
                    <option value="male"> Masculin </option>
                    <option value="female"> Féminin </option>

                </select>

                <label for="nom">Nom :</label>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["nom"]) && empty($_POST["nom"])) {
                    $formErrors["nom"] = "information NOM manquante";
                    echo $formErrors["nom"];
                } ?></div>

                <input type="text" name="nom" id="nom" placeholder="Ex: Mouse" size="32" maxlength="30" autofocus><br>
                
                <label for="prenom">Votre Prénom :</label>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["prenom"]) && empty($_POST["prenom"])) {
                    $formErrors["prenom"] = "information PRENOM manquante";
                    echo $formErrors["prenom"];
                } ?></div>
                <input type="text" name="prenom" id="prenom" placeholder="Ex: Mickey" size="32" maxlength="30"><br>
                
                <label for="email"> Votre adresse mail :</label>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["email"]) && filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
                    $formErrors["email"] = "information EMAIL manquante";
                    echo $formErrors["email"];
                } ?></div>
                <input type="text" name="email" id="email" placeholder="mickey.mouse@disney.com">
            </fieldset>

            <fieldset class="border p-3 bg-body-secondary bg-opacity-50 mb-3 bg">
                <legend>Votre statut :</legend>
                <div class="d-flex flex-row justify-content-center text-danger ">
                    <?php if (isset($_POST["status"]) && empty($_POST["statut"])) {
                    $formErrors["statut"] = "information SATUT manquante";
                    echo $formErrors["statut"];
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
                    $formErrors["message"] = "Minimum 5 caractères";
                    echo $formErrors["message"];
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
//var_dump($_SESSION); 
$nbPages = $_SESSION['count'];
echo "session active = $id_session  -------- nombre de page vue = $nbPages";
print_r($formErrors);
?>