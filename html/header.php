<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Seedbox Manager</title>        
        <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link type="text/css" rel="stylesheet" href="./css/style.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if lt IE 9]>
            <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="./js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
    
    <header class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".phone-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Seedbox Manager</a>
        </div>
        <nav class="collapse navbar-collapse phone-menu">
            <ul class="nav navbar-nav">
                <li class="nav-link"><a href="<?php echo $user->rutorrentUrl(); ?>">Rutorrent</a></li>
                <?php if ( $user->cakeboxActiveUrl() ) { ?>
                <li class="nav-link"><a href="<?php echo $user->cakeboxUrl(); ?>">Cakebox</a></li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user icone-seed-manageruser" data-toggle="dropdown"><?php echo $userName; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?edit"><i class="glyphicon glyphicon-wrench"></i> Paramètres</a></li>
                        <li><a class="aboutlink" data-toggle="modal" href="#popupinfo"><i class="glyphicon glyphicon-info-sign"></i> A propos</a></li>
                        <li><a id="logout" data-toggle="modal" href="#popuplogout" title="Se déconnecter"><strong><i class="glyphicon glyphicon-log-out"></i> Déconnexion</strong></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        </div>
    </header>