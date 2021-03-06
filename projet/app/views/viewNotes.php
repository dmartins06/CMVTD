<!DOCTYPE HTML>
<!--
  Prologue by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Note</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
     <link href="<?php echo ''.base_url(). 'assets/css/main.css' ;?>" rel="stylesheet">
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo ''.base_url(). 'assets/css/ie8.css' ;?>" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo ''.base_url(). 'assets/css/ie9.css' ;?>" /><![endif]-->
  </head>
  <body>

    <!-- Header -->
      <div id="header">

        <div class="top">

          <!-- Logo -->
            <div id="logo">
              <span class="image avatar48"><img src="<?php echo ''.base_url().'assets/img/avatar.png';?>" alt="" /></span>
              <h1 id="title">Directeur</h1>
              <p>Gestion</p>          
                    <a href="<?php echo ''.base_url(). 'login/deconnexion' ;?>" class="fa fa-power-off solo">
                    </a>
            </div>

          <!-- Nav -->
            <nav id="nav">
              
              <ul>
                <li><a href="<?php echo ''.base_url(). 'Accueil' ;?>" id="top-link" ><span class="icon fa-users">Placer Equipes</span></a></li>
                <li><a href="<?php echo ''.base_url(). 'Direction/pageArbitre' ;?>" id="portfolio-link" ><span class="icon fa-user">Placer arbitres</span></a></li>
                <li><a href="<?php echo ''.base_url(). 'Direction/pageHebergement' ;?>" id="about-link" ><span class="icon fa-home">Voir hébergements</span></a></li>
                <li><a href="<?php echo ''.base_url(). 'Direction/pageCompte' ;?>" id="contact-link" ><span class="icon fa-sticky-note">Creer comptes</span></a></li>
              </ul>
            </nav>

        </div>

      </div>

    <!-- Main -->
      <div id="main">

        <!-- Intro -->
          <section id="top" class="three">
            <div class="container">
              <?php if($resultname != null){
               foreach($resultname as $row){
                 ?><h2> Arbitre : <?php echo ''.$row->nom.' '.$row->prenom.' </br>'.$row->nationnalité.'';?></h2><?php
                    }} ?>
<br><br>

 <table class="default">
                  <tr>
                     <th>Date</th>
                      <th>Nom</th>
                       <th>Adresse</th>
                  </tr>
                
                  <?php if($reservation != null){
               foreach($reservation as $row){
                  ?>
                  <tr>
                     <td ><?php echo $row->date; ?></td>
                     <td ><?php echo $row->nom; ?></td>
                     <td ><?php echo $row->adresse; ?></td>
                  </tr><?php }} ?>
               </table>
 <form action="<?php echo '' . base_url() . 'Direction/viewResDispo';?>" method="post">
                     Ajout reservation:<br>
                     <input type="date" name="date"/><br>
                                         </br>

                    <input type="submit" value="Valider" name="inscription" />
                    </br>
               </div>
               </form>    
            </div>
          </section>

      
          </section>

      </div>

    <!-- Footer -->
      <div id="footer">

        <!-- Copyright -->
          <ul class="copyright">
            <li>&copy;Site factice pour un projet</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>

      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollzer.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </body>
</html>