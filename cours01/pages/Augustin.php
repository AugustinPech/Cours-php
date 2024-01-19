<?php
$metatitle = 'CV - Augustin PECH';
$metadescription = 'présentation du CV de AUGUSTIN PECH , développeur débutant.';
include 'header.php'; ?>
<main class="container">
  <div class="d-flex flex-row justify-content-between my-2">
    <div class="d-flex flex-column justify-content-end align-items-start">
      <div class="border border-primary px-5 py-1">
        <h1 class="text-primary">AdminSys Devops</h1>
      </div>
      <p> PECH Augustin</p>
    </div>
    <div class=" w-25 float-end">
      <img class="img-fluid col-10  rounded" id="IDPic" src="/cours01/img/Augustin.webp" alt="">
    </div>
  </div>
  <div class="container">
    <h2 class="border-bottom border-primary text-primary">Formation</h2>
    <ul class="list-unstyled">
      <li><b>2020 -
          <script>document.write(new Date().getFullYear());</script>
        </b> : Autoformation, Openclassroom / Youtube</li>
      <li><b>2021-2022</b> : DU-SIG-AD, UGA-CERMOSEM</li>
      <li><b>2009 - 2015</b> : Licence - Master 1 - Master 2 - STU spé Planétologie, Université Paris Saclay</li>
    </ul>
  </div>
  <div class="container">
    <h2 class="border-bottom border-primary text-primary">Expériences</h2>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-primary">
        <tr>
          <th class="col-2">Période</th>
          <th class="col-2">Poste</th>
          <th>Définition</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>2015 - 2020</th>
          <th>Géomaticien, <div class="fw-normal">Freelance</div>
          </th>
          <th class="fw-normal">Réalisation de cartes et/ou de supports de travail dans l’environnement QGIS pour des
            projets personnels
            et associatifs.</th>
        </tr>
        <tr>
          <th>2021 - 2023</th>
          <th>Géotechnicien, <div class="fw-normal">ALIOS Ingénierie - VALENCE (26)</div>
          </th>
          <th class="fw-normal">
            </thclass>Technicien dans un bureau d'étude en géotechnique mes missions sont : <ul>
              <li>La création de supports numériques de travail ;</li>
              <li>Produire des rapports à destination des experts d'assurance, maîtres d'ouvrages,... ;</li>
              <li>R&D de systèmes pour l’optimisation des méthodes de travail ;</li>
              <li>Amélioration des processus de l’entreprise à travers la création de modèle de rapport ;</li>
              <li>Recherche documentaire sur des bâtiments ou des structures pour des projets de travaux.</li>
            </ul>
          </th>
        </tr>
        <tr>
          <th>2015 - 2023</th>
          <th>Enseignant, <div class="fw-normal">Education nationale</div>
          </th>
          <th class="fw-normal">J'ai enseigné les SVT, les Mathématiques, les SPC, la BPH et leurs équivalents dans la
            nouvelle formule du
            BAC <ul>
              <li>Réalisation de cours et de support pédagogiques créatifs en présentiel ou distanciel ;</li>
              <li>Adaptation aux publics d'âges et d'origines sociales différents.</li>
            </ul>
          </th>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <div class="col-12 col-md-6  px-4">
      <h2 class=" border-bottom border-primary text-primary">Compétences</h2>
      <div class="gap-2 d-flex flex-column justify-content-between align-items-stretch">
        <div>
          <div class="d-flex flex-row justify-content-between">QGIS/ ArcGIS <img class="col-1"
              src="https://upload.wikimedia.org/wikipedia/commons/9/91/QGIS_logo_new.svg" alt=""></div>
        </div>
        <div>
          <div class="d-flex flex-row justify-content-between">SQL/ PostGIS <img class="col-1"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Postgresql_elephant.svg/1200px-Postgresql_elephant.svg.png"
              alt=""></div>
        </div>
        <div>
          <div class="d-flex flex-row justify-content-between">Python/ SciLab <img class="col-1"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/800px-Python-logo-notext.svg.png"
              alt=""></div>
        </div>
        <div>
          <div class="d-flex flex-row justify-content-between">AutoCAD/ Adobe Illustrator<img class="col-1"
              src="https://i.pinimg.com/originals/58/6b/be/586bbe06de2d9896b8ef4dda71caa13c.png" alt=""></div>
        </div>
        <div>
          <div class="d-flex flex-row justify-content-between">Excel & pack office<img class="col-1"
              src="data:image/png;base64,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"
              alt=""></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6  px-4">
      <h2 class=" border-bottom border-primary text-primary">Hobby</h2>
      <div class="gap-2 d-flex flex-column justify-content-between align-items-stretch">
        <div class="small"><a href="/cours01/pages/hobby.php">Bricollage : thermo-électricité & autonomie énergétique</a></div>
        <div class="small">Création et test de jeux de société // jeux de rôle</div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2 class="border-bottom border-primary text-primary">Réalisations</h2>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-primary">
        <tr>
          <th class="col-2">Période</th>
          <th>Contexte</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Décembre 2023</th>
          <th>Formation Dev-Ops au Campus Numérique de VALENCE</th>
          <th>
            <a href="">
              Une page HTML-CSS utilisant BootStrap et présentant une entreprise fictive avec son équipe.
            </a>
          </th>
        </tr>
        <tr>
          <th>Janvier 2024</th>
          <th>Formation Dev-Ops au Campus Numérique de VALENCE</th>
          <th>
            Une structure php pour présenter les pages HTML-CSS-BootStrap et présentant mon CV  (cette page) ainsi que quelques
            informations annexes.
          </th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </tbody>
    </table>
  </div>
</main>
<?php
include 'footer.php';
?>