<?php
try
{
    include('bdd.php');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM user');
while ($donnees = $reponse->fetch())
{
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asinith.us - UserCP</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Asinith.us - UserCP</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>                    
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i > Bootstrap Grid</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $donnees['username']; ?><b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                           <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                           <li class="divider"></li>
                           <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                       </ul>
                   </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>UserCP</h1>
                    <div class="alert alert-success alert-dismissable">
                        Welcome to your UserCP, here you'll be able to see the last updates & programs that you have access to.
                        <br />
                        If you need anything just contact @asinith.
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                       <h3><i class="fa fa-info-circle"></i>  Informations</h3>
                    </div>
                </div>
            </div>
			
			<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Version v1.07</h3>
                        </div>
                        <div class="panel-body">
                            <h4>La version v1.07 vient de sortir :</h4>
							Automatisation du lancement de l'application <br>
							Correctif des bugs majeurs et mineurs <br>
							Liaison UserCP et Software <br>
							Design refait à neuf <br>
							<button type="button" class="btn btn-primary" style="float: right;">Download</button>
                        </div>
                    </div>
			</div>
			
			<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Version v1.06</h3>
                        </div>
                        <div class="panel-body">
                            <h4>La version v1.06 vient de sortir :</h4>
							Automatisation du lancement de l'application <br>
							Correctif des bugs majeurs et mineurs <br>
							Liaison UserCP et Software <br>
							Design refait à neuf <br>
							<button type="button" class="btn btn-primary" style="float: right;">Download</button>
                        </div>
                    </div>
			</div>
			
			<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Version v1.05</h3>
                        </div>
                        <div class="panel-body">
                            <h4>La version v1.05 vient de sortir :</h4>
							Automatisation du lancement de l'application <br>
							Correctif des bugs majeurs et mineurs <br>
							Liaison UserCP et Software <br>
							Design refait à neuf <br>
							<button type="button" class="btn btn-primary" style="float: right;">Download</button>
                        </div>
                    </div>
			</div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                       <h3><i class="fa fa-wrench"></i>  Next update release</h3>
                    </div>
                </div>
            </div>
			
			<h3 id="progress-animated">Code</h3>
                    <div class="bs-example">
                        <div class="progress progress-striped active">
                            <div class="progress-bar" style="width: 75%"></div>
                        </div>
                    </div>

			<h3 id="progress-animated">Design</h3>
                    <div class="bs-example">
                        <div class="progress progress-striped active">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
					
</body>
</html>
<?php } ?>