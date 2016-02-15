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
                  <span class="hidden-xs">Amélie Cordier</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo ''.base_url(). 'assets/img/avatar2.png';?>" class="img-circle" alt="User Image">
                    <p>
                      Amélie Cordier - Professeur
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
                      <a href="#" class="btn btn-default btn-flat">Déconnexion</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
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
              <p>Amélie Cordier</p>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">ACTIONS</li>
            <!-- Optionally, you can add icons to the links -->
			<li class="treeview"><a href="#"><i class="fa fa-info"></i> <span>Informations</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-plus"></i> <span>Ajouter projet</span></a></li>
            <li><a href="#"><i class="fa fa-users"></i> <span>Liste des groupes</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-list"></i> <span>Gestion projets</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Mes projets</a></li>
                <li><a href="#">Demande de projet</a></li>
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
                   <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nProjet">Nom du projet</label>
                      <input type="text" class="form-control" id="nProjet" placeholder="Nom du projet">
                    </div>
                    <div class="form-group">
                      <label for="dProjet">Description du projet</label>
					<textarea class="form-control" id="dProjet" rows="3" placeholder="Description du projet"></textarea>                   
					</div>
					<div class="form-group">
                      <label>Semestre</label>
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
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
                  <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">«</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>Nom du projet</th>
                      <th>Description du projet</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Projet tuteuré 1</td>
                      <td>
                        Description 1
                      </td>
                    </tr>
					 <tr>
                      <td>2.</td>
                      <td>Projet tuteuré 2</td>
                      <td>
                        Description 2
                      </td>
                    </tr>
					 <tr>
                      <td>3.</td>
                      <td>Projet tuteuré 3</td>
                      <td>
                        Description 3
                      </td>
                    </tr>
                    
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

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->
			

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo ''.base_url(). 'assets/plugins/jQuery/jQuery-2.1.4.min.js';?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo ''.base_url(). 'assets/bootstrap/js/bootstrap.min.js';?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo ''.base_url(). 'assets/js/app.min.js';?>"></script>

  </body>
</html>
