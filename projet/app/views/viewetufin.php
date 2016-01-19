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

       
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo ''.base_url().'assets/css/styleIndex.css';?>">


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
    function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
    }

    var cook = readCookie("cookfin");
    if (cook == null)
    {
         $("#id-popup").modal("show");// affiche la popup au chargement de la page

        var today = new Date(), expires = new Date();
        expires.setTime(today.getTime() + (365*24*60*60*1000));
        document.cookie = "cookfin" + "=" + encodeURIComponent("stop") + ";expires=" + expires.toGMTString();
    }   
   
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
                            <h1>Projet tuteuré </h1>
                            <p>Université Lyon I - Accueil étudiant - Semestre  <?php echo $this->session->userdata('semestre') ?> - <?php echo $this->session->userdata('nom') ?> <?php echo $this->session->userdata('prenom') ?> - <a href="<?php echo site_url('Login/deconnexion') ;?>">Déconnexion</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
        <?php echo $this->session->flashdata('msgg'); ?>
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="menu-item light-red">
                            <a href="<?php echo ''.base_url(). 'Etudiant/gestionGroupe' ;?>" data-toggle="modal">
                                <i class="fa fa-users"></i>
                                <p>Gestion groupe</p>
                            </a>
                        </div>
                        
                        
                        <div class="menu-item green">
                            <a href="<?php echo ''.base_url(). 'Etudiant/notreProjet' ;?>" data-toggle="modal">
                                <i class="fa fa-file-text-o"></i>
                                <p>Mon projet</p>
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
                                </ol>

                                <!-- Wrapper for slides -->
                               <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="<?php echo ''.base_url(). 'assets/img/about-02.png' ;?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo ''.base_url(). 'assets/img/about-01.jpg' ;?>" class="img-responsive" alt="">
                                    </div>
                                   

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                  

                                      <a href="<?php echo ''.base_url(). 'Etudiant/voirNote' ;?>" data-toggle="modal">
                                      <i class="fa fa-graduation-cap"></i>

                                        <p>Notes</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                   <a data-toggle="modal" data-toggle="modal" data-target="#contactmodal" data-whatever="@getbootstrap">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contact</p>
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
                              <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-picture-o"></i>
                                        <p>Gallerie</p>
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
          <h4 class="modal-title" id="titrePopUp">Faire son projet tuteuré
          <!-- lla croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"> Vous devez rendre votre projet avant le : xx/xx/2016 </p> 
           

            <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Etape 1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
La première étape est de vous trouver un groupe de projet tuteuré grâce au module "Gestion de groupe"      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Etape 2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
    votre groupe doit demander les projets qui l'interesse (via le module Liste des projets)  ou/et en proposer un (via le module Proposer un projet)     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Etape 3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
    Pour finir les profs des projets demandés vous contacterons et déciderons si il vous prenne en tuteur, une fois accepté le projet passera en validé      </div>
    </div>
  </div>
</div>

          <p> Vous pouvez rentrouver ces informations dans le module "Informations" </p> 

          </div>
          
          <!-- le pied de page de la popup --> 
          <div class="modal-footer"> 
          <a class="btn btn-primary pull-left" data-dismiss="modal" aria-hidden="true">Fermer</a> 
          </div> 

        </div> 

      </div> 

    </div>
        <!-- End Main Body Section -->

        
        <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Contact</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo '' . base_url() . 'Etudiant/rentreProjet';?>" method="post">
          <div class="form-group">
            <label>Le message sera transmis au responsable des projets tuteurés</label>
          </div>
          <div class="form-group">
        <label for="message-text" class="control-label">Emmeteur:</label>
          <input class="form-control" name="pseudo" value="<?php echo $this->session->userdata('nom') ?> <?php echo $this->session->userdata('prenom') ?>" disabled="disabled" />

            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text" value ="Votre message" name="message">Votre message..</textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" name="Envoyer" class="btn btn-primary">Envoyer </button>
     </form>  </div>
    </div>
  </div>
</div>
        
    </body>
    
</html>