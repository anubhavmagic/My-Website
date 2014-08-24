<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Home </title>
  <link rel="stylesheet" href="<?php echo Base_url(); ?>resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo Base_url(); ?>resources/css/styles.css">
  <script src="<?php echo Base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo Base_url(); ?>resources/js/bootstrap.min.js"></script>
  <?php if($page=="resume")
  { ?>
<link rel="stylesheet" href="<?php echo Base_url(); ?>resources/css/resume.css">
  <?php }
   ?>
</head>
<body>

<!-- ====<NAVBAR>====<NAVBAR>====<NAVBAR>====<NAVBAR>====<NAVBAR>====<NAVBAR>====<NAVBAR>==== -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo Base_url();?>home"><h4>Anubhav Bimbisariye</h4></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="<?php if($page=="home"){?>active<?php }?>">
            <a href="<?php echo Base_url();?>home">
              <h4>Home</h4>
            </a>
          </li>
          <li class="<?php if($page=="resume"){?>active<?php }?>">
            <a href="<?php echo Base_url(),"home/resume"; ?>">
              <h4>CV/Resume</h4>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <h4>Dropdown <span class="caret"></span></h4>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><h4>Link</h4></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4>Dropdown<span class="caret"></span></h4> </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<!-- ====</NAVBAR>====</NAVBAR>====</NAVBAR>====</NAVBAR>====</NAVBAR>====</NAVBAR>====</NAVBAR>==== -->
