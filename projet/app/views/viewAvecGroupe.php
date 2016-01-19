<!DOCTYPE HTML>
<!--
  Prologue by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Gestion groupe</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
            <link href="<?php echo ''.base_url(). 'assets/bootstrap/css/bootstrap.min.css' ;?>" rel="stylesheet">

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
              <h1 id="title">Etudiant</h1>
              <p>Gestion groupe</p>          
                    
            </div>

          <!-- Nav -->
            <nav id="nav">
              
              <ul>
                <li><a href="" id="portfolio-link" ><span class="icon fa-user">Gestion groupe</span></a></li>
                <li><a href="<?php echo ''.base_url(). 'Accueil' ;?>" id="top-link" ><span class="icon fa-home">Accueil</span></a></li>
              
              </ul>
            </nav>

        </div>

      </div>

    <!-- Main -->
      <div id="main">

        <!-- Intro -->
          <section id="top" class="three">
            <div class="container">

             <?php if($infoGroupe != null){
                foreach($infoGroupe as $row){?>

                     <h2>Nom du groupe : <?php echo $row->nomGroupe; ?></h2></br>
                    <h3>Vos camarades de groupes :</h3></br>
                    <?php }} ?>

                   <?php echo $this->session->flashdata('msgnoadd'); ?>    

                <?php   if($this->session->flashdata('msgadd') != null)
                {?>
                     <div class="alert alert-success" role="alert"> Votre camarade à bien été ajouté !   
                  </div>
                <?php } ?>
                 

                   


                 <center>   <table class="default">
                  <tr>
                     <th>Nom membre</th>
                      <th>Prenom membre</th>
                  </tr>
                   <?php if($MembreGroupe != null){
                foreach($MembreGroupe as $row){?>

                  <tr>
                     <td><?php echo $row->nomEtudiant; ?></td>
                     <td><?php echo $row->prenomEtudiant; ?></td>
                  </tr><?php }} ?>
               </table><center>

                  <div style="border:groove">

                 <form action="<?php echo '' . base_url() . 'Etudiant/addMembre';?>" method="post">
                     Ajouter un membre:<br>
                    <input type="user" name="nom" /><br><br>
                    <input type="submit" value="Valider" name="inscription" /><br>
                    </br></form>

                    </div>

                    <form action="<?php echo '' . base_url() . 'Etudiant/quitterGroupe';?>" method="post">
                     <br><br>
                    <input type="submit" value="Quitter le groupe" name="quitter" /><br>
                    </form>
              </center>
             

            </div>
          </section>

    <!-- Footer -->
      <div id="footer">

        <!-- Copyright -->
          <ul class="copyright">
            <li>&copy;Site factice pour un projet</li>
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