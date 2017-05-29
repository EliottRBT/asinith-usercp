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
                    <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>                    
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i > Bootstrap Grid</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown active">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $donnees['username']; ?><b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
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
                    <h1>Your profile</h1>
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
                       <h3><i class="fa fa-info-circle"></i>  Your personal informations</h3>
                    </div>
                </div>
            </div>
			
			<div class="form-group input-group col-xs-2">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" id="disabledInput" type="text" name="username" style="background-color: #fff;" placeholder="<?php echo $donnees['username']; ?>" disabled>
            </div>
			
			<div class="form-group input-group col-xs-2">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input class="form-control" id="disabledInput" type="text" name="username" style="background-color: #fff;" placeholder="<?php echo $donnees['hwid']; ?>" disabled>
            </div>
			
			<button type="submit" class="btn btn-success disabled">Save (soon)</button>
					
</body>
</html>
<?php } ?>