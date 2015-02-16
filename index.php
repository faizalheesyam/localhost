<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>localhost</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="localhost/localhost.css" rel="stylesheet">
    <script src="localhost/ie10-viewport-bug-workaround.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style type="text/css">
	/* Custom CSS */

	body {
		background-color: #303030;
		color: #ffffff;
		padding-top: 80px;
	}

	a.thumbnail {
		background: #343434;
		text-align: center;
		border: none;
		text-decoration: none;
		padding: 30px 0 20px;
	}

	a.thumbnail span {
		font-size: 4em;
		color: #777777;
		margin-bottom: 20px;
	}

	a.thumbnail .caption {
		padding: 0;
		color: #cccccc;
		font-size: .9em;
		margin-bottom: 10px;
	}

	.white span { color: #ffffff; }

	a.thumbnail span.brown { color: #BF8F36; }
	a.thumbnail span.white { color: #F2ECCE; }

	a.thumbnail:hover { background: #222222; }

	</style>

  </head>

  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/theme/#">f.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">l0calh05t</a></li>
            <li class="dropdown">
              <a href="http://getbootstrap.com/examples/theme/#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://getbootstrap.com/examples/theme/#">Action</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="http://getbootstrap.com/examples/theme/#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <?php
      $path = './';
      $contents = scandir($path);
    ?>

    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <?php
            for($i=0; $i<sizeof($contents); $i++):
              if(!empty($contents[$i]) && is_file($path.$contents[$i]) && ($contents[$i] != '.' && $contents[$i] != '..' && $contents[$i] != '.DS_Store' && $contents[$i] != 'index.php' && $contents[$i] != 'Sites.sublime-project' && $contents[$i] != 'Sites.sublime-workspace') ):
                echo '<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2"><a class="thumbnail white" href="'.$path.$contents[$i].'"><span class="glyphicon glyphicon-file white"></span>';
                echo '<div class="caption">'.$contents[$i].'</div></a></div>';
              endif;
            endfor;
            ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <?php
            for($i=0; $i<sizeof($contents); $i++):
              if(is_dir($path.$contents[$i]) && ($contents[$i] != '.' && $contents[$i] != '..' && $contents[$i] != 'localhost') ):
                echo '<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3"><a class="thumbnail" href="'.$path.$contents[$i].'"><span class="glyphicon glyphicon-folder-close brown"></span>';
                echo '<div class="caption">'.$contents[$i].'</div></a></div>';
              endif;
            endfor;
            ?>
          </div>
        </div>
      </div>

    </div> <!-- /container -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="localhost/docs.min.js"></script>
  </body>
</html>
