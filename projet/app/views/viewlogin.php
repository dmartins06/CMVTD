<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projets Tureures</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo ''.base_url(). 'assets/bootstrap/css/bootstrap.min.css' ;?>">
        <link rel="stylesheet" href="<?php echo ''.base_url().'assets/font-awesome/css/font-awesome.min.css';?>">
		<link rel="stylesheet" href="<?php echo ''.base_url().'assets/css/form-elements.css';?>">
        <link rel="stylesheet" href="<?php echo ''.base_url().'assets/css/style.css';?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Connectez-vous</h3>
                            		<p>Entrez vos identifiants </p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
						<?php	 $attributes = array("class" => "login-form", "id" => "loginform", "name" => "loginform");
									echo form_open("login/index", $attributes);?>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Numéro Etudiant/Professeur</label>
			                        	<input type="text" placeholder="Numéro Etudiant/Professeur..." class="form-username form-control"  id="txt_username" name="txt_username" >
			                        </div>
									 <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Mot de passe</label>
			                        	<input type="password"  id="txt_password" name="txt_password" placeholder="Mot de passe..." class="form-password form-control">
										<span class="text-danger"><?php echo form_error('txt_password'); ?></span>
								   </div>
			                        <button  id="btn_login" name="btn_login" type="submit" value="Login" class="btn">Connexion</button>
								<?php echo form_close(); ?>
								</br>
								<?php echo $this->session->flashdata('msg'); ?>		                    </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo ''.base_url().'assets/js/jquery-1.11.1.min.js';?>"></script>
        <script src="<?php echo ''.base_url().'assets/bootstrap/js/bootstrap.min.js';?>"></script>
        <script src="<?php echo ''.base_url().'assets/js/jquery.backstretch.min.js';?>"></script>
        <script src="<?php echo ''.base_url().'assets/js/scripts.js';?>"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>