<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Projets tuteurés</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo ''.base_url(). 'assets/bootstrap/css/bootstrap.min.css' ;?>" rel="stylesheet">

        <!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<!-- Custom CSS -->
        <link href="<?php echo ''.base_url(). 'assets/css/animate.css' ;?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo ''.base_url(). 'assets/css/styleIndex.css';?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="<?php echo ''.base_url(). 'assets/js/jquery-2.1.1.min.js ';?>"></script>
        <script src="<?php echo ''.base_url(). 'assets/bootstrap/js/bootstrap.min.js' ;?>"></script>
        <script src="<?php echo ''.base_url(). 'assets/js/jquery.appear.js' ;?>"></script>
        <script src="<?php echo ''.base_url(). 'assets/js/contact_me.js' ;?>"></script>
        <script src="<?php echo ''.base_url(). 'assets/js/jqBootstrapValidation.js' ;?>"></script>
        <script src="<?php echo ''.base_url(). 'assets/js/modernizr.custom.js' ;?>"></script>
        <script src="<?php echo ''.base_url(). 'assets/js/script.js' ;?>"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<script type="text/javascript"> 
$(document).ready(function()
{ 

    $("#id-popup").modal("show");// affiche la popup au chargement de la page


}); 
</script>

    </head>
    
    <body>
        
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1>Projet tuteurés</h1>
                            <span>Université Lyon I - Accueil professeurs  - <?php echo $this->session->userdata('nom') ?> <?php echo $this->session->userdata('prenom') ?> - <a href="<?php echo site_url('login/deconnexion') ;?>">Déconnexion</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#feature-modal" data-toggle="modal">
								<i class="fa fa-bars"></i>
                                <p>Liste de projets</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#portfolio-modal" data-toggle="modal">
                                <i class="fa fa-file-text-o"></i>
                                <p>Mes projets déposés</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#about-modal" data-toggle="modal">
								<i class="fa fa-users"></i>
                                <p>Liste des étudiants sans projet</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="<?php echo ''.base_url(). 'assets/img/about-02.png' ;?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo ''.base_url(). 'assets/img/about-01.jpg' ;?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo ''.base_url(). 'assets/img/about-03.jpg' ;?>" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-picture-o"></i>
                                        <p>Gallerie</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="#team-modal" data-toggle="modal">
                                      <i class="fa fa-graduation-cap"></i>

                                        <p>Déposer une iddée de projet</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
						 <a  data-toggle="modal" data-target="#id-popup">
								<i class="fa fa-info-circle"></i>
                                <p>Informations</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-comments"></i>
                                <p>Répondre aux demandes</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                           <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contact</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
		
		    <div class="modal fade" id="id-popup" tabindex="-1" role="dialog" aria-labelledby="titrePopUp" aria-hidden="true"> 
    
      <div class="modal-dialog"> 

        <div class="modal-content"> 
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Choix de projets tuteurés
          <!-- lla croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"> On peut mettre ici les consignes pour le projet tuteuré ainsi que les dates limite pour les profs </p> 
          <p>Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des e Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme ass
			e Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla
			e Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme ass
			e Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme ass
			e Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme ass
			e Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme ass		  </p> 
          </div>
          
          <!-- le pied de page de la popup --> 
          <div class="modal-footer"> 
          <a class="btn btn-primary pull-left" data-dismiss="modal" aria-hidden="true">Ne plus afficher ce message</a> 
          </div> 

        </div> 

      </div> 

    </div>
        <!-- End Main Body Section -->
        
    
        
        
    </body>
    
</html>