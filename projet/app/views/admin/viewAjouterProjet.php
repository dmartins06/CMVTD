<!DOCTYPE html>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet Tuteuré | Ajouter projet</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo ''.base_url(). 'assets/bootstrap/css/bootstrap.min.css';?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo ''.base_url(). 'assets/css/AdminLTE.min.css';?>">

    <link rel="stylesheet" href="<?php echo ''.base_url(). 'assets/css/skins/skin-blue.min.css';?>">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.html" class="logo">
          <!--Titre si menu ferme -->
          <span class="logo-mini"><b>P</b>TUT</span>
          <!-- Titre si menu ouvert -->
          <span class="logo-lg"><b>Gestion</b> Projet</span>
        </a>

        <!-- Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Bouton fermer menu-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navigation</span>
          </a>
          <!-- Bar de navigation -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo ''.base_url(). 'assets/img/avatar2.png';?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo ''.base_url(). 'assets/img/avatar2.png';?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $this->session->userdata('username') ?> - Professeur
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Mes groupes</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Mes projets</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Ajouter Projet</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo site_url('Login/deconnexion') ;?>" class="btn btn-default btn-flat">Déconnexion</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo ''.base_url(). 'assets/img/avatar2.png';?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('username') ?></p>
            </div>
          </div>


          
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">ACTIONS</li>
            <!-- Optionally, you can add icons to the links -->
      <li class="treeview"><a href="<?php echo ''.base_url(). 'IndProf' ;?>"><i class="fa fa-info"></i> <span>Informations</span></a></li>
            <li class="active"><a href="<?php echo ''.base_url(). 'IndProf/addProject' ;?>"><i class="fa fa-plus"></i> <span>Ajouter projet</span></a></li>
            <li class="treeview"><a href="<?php echo ''.base_url(). 'IndProf/listeGroupe' ;?>"><i class="fa fa-users"></i> <span>Liste des groupes</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-list"></i> <span>Gestion projets</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo ''.base_url(). 'IndProf/myProject' ;?>">Mes projets</a></li>
                <li><a href="<?php echo ''.base_url(). 'IndProf/listeDemandes' ;?>">Demande de projet</a></li>
              </ul>
            </li>
      <li><a href="#"><i class="fa fa-envelope"></i> <span>Contact</span></a></li>
      

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			Ajouter un projet
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
	
			   <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
            					<div class="box box-success">
				   <div class="box-header with-border">
                  <h3 class="box-title">Informations pour l'ajout de projet</h3>
                </div>
                <div class="box-body">
				Condition à respecter : <br>
				-Blablabla
				</br>-Blablabl
                    </div>
					</div>
					
					  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajouter un projet</h3>
                </div><!-- /.box-header -->
                   <form role="form"  action="<?php echo ''.base_url(). 'IndProf/ajoutProjet' ;?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nProjet">Nom du projet</label>
                      <input type="text" class="form-control" id="nProjet" name="nom" placeholder="Nom du projet">
                    </div>
                    <div class="form-group">
                      <label for="dProjet">Description du projet</label>
					<textarea class="form-control" id="dProjet" rows="3" name="desc" placeholder="Description du projet"></textarea>                   
					</div>
					<div class="form-group">
                      <label>Semestre</label>
                      <select class="form-control" name="semestre">
                        <option value ="S1">1</option>
                        <option value ="S2">2</option>
                        <option value ="S3">3</option>
                        <option value ="S4">4</option>
                      </select>
                    </div>
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </div>
                </form>
              </div>
                  </div><!-- /.box-body -->
				        <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
           <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Listes des projets existant</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>Nom du projet</th>
                      <th>Description du projet</th>
                       <th>Semestre</th>
                    </tr>
                    
                     <?php if($results != null){
                foreach($results as $row){?>

                  <tr>
                      <td><?php echo $row->numProjet; ?></td>
                     <td><?php echo $row->nomProjet; ?></td>
                     <td><?php echo $row->descriptionProjet; ?></td>
                     <td><?php echo $row->Semestre; ?></td>

                  </tr><?php }} ?>
                    
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
              
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Université Claude Bernard Lyon I
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016  <a href="#">IUT Informatique Lyon 1</a></strong>
      </footer>

    

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo ''.base_url(). 'assets/plugins/jQuery/jQuery-2.1.4.min.js';?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo ''.base_url(). 'assets/bootstrap/js/bootstrap.min.js';?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo ''.base_url(). 'assets/js/app.min.js';?>"></script>

  </body>
</html>
