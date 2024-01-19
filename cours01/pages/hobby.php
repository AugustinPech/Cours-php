<?php
$metatitle = 'HOBBY - Augustin PECH';
$metadescription = 'présentation d&apos;un hobby d&apos;AUGUSTIN PECH , développeur débutant.';
include 'header.php';
?>
<main class="calc d-flex flex-column justify-content-center">
    <div class="d-flex flex-row justify-content-between">
        <div class="sur_image">
            <h2 style="color:red; font-size:xx-large"> Le bricollage </h2>
            <span>... par Augustin Pech </span>
        </div>

        <dl class="sur_image" style="color:black">
            <dt style="text-align:center">
                <strong>
                    Je suis passionné depuis longtemps par le bricollage.
                    Je m'intéresse régulièrement à de nouveaux sujets.
                    J'ai choisi de vous présenter ici mon projet en cours.
                </strong>
            </dt>
            <dt>
                <strong>La thermoélectricité</strong>
            </dt>
            <dd>
                Il s'agit d'une technique de production d'électricité à partir de la chaleur perdue par un objet chaud.
                J'ai pour projet de réaliser un module thermoélectrique pour alimenter une pompe 12V et faire circuler
                de l'eau dans mon poêle à bois pour chauffer une baignoire pour enfant.
                Le dispositif projeté est très similaire à celui présenté dans la vidéo ci-dessous à ceci près que
                j'utiliserais un tuyau inox pour éviter la corrosion et qu'il y aura un radiateur en dérivation ainsi
                qu'un système de gestion de la pression.
            </dd>
            <dt>
                <strong>L'état du projet</strong>
            </dt>
            <dd>
                J'ai reçu le matériel pour faire mon premier générateur thermoélectrique.
                J'aurais un prototype de ventilateur autonome pour faire des essais à Noël.
            </dd>
        </dl>
    </div>

    <div class="d-flex flex-row justify-content-between">
        <div class="sur_image" id="video"><iframe class="w-100 h-100" src="https://www.youtube.com/embed/hIccNZVX6X8"
                title="Ep17 Chauffer sa &quot;piscine&quot; avec un rocket stove"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe></div>

        <div class="sur_image w-30" style="color:black">
            <h3 style="text-align:center;">Principe général de fonctionnement</h3>
            <ul>
                <li>Plomberie
                    <ol>
                        <li>Une<strong> pompe</strong> entraîne l'eau dans un <strong>tuyau</strong></li>
                        <li>Le<strong> tuyau</strong> conduit l'eau contre // dans /// sur le poèle pour qu'elle chauffe
                        </li>
                        <li>L'eau chaude arrive dans la <strong>baignoire</strong> en passant par des flexibles haute
                            température</li>
                    </ol>
                </li>
                <li> Electricité
                    <ol>
                        <li>Des <strong>modules à effet peltier</strong> produisent ~2V chacun grasse à la chaleur du
                            poêle</li>
                        <li>Il faut ~6 modules pour alimenter la pompe dans la vidéo</li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>