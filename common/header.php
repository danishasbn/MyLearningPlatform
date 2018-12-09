<?php
    //Get Project folder full path
    $fullPath = realpath($_SERVER['DOCUMENT_ROOT']);
    $titleTabIcon = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/images/icons/title-tab-icon.png';
    $imagePath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/images/icons/logo.jpg';
    $bootstrapCssPath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/css/bootstrap.min.css';
    $AppCssPath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/css/app.css';
    $FontAwesomePath = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/css/fontawesome.css';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- Allow application to be responsive on mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title on the tab -->
  <title>My Learning Platform</title>
  <!-- Title tab icon -->
  <link href="<?= $titleTabIcon; ?>" rel="icon"/>
  <!-- Bootstrap 4.0.0 Main CSS  -->
  <link href="<?= $bootstrapCssPath; ?>" rel="stylesheet" type="text/css"/>
  <!-- Custom Css -->
  <link href="<?= $AppCssPath; ?>" rel="stylesheet" type="text/css"/>
  <!-- Font Awesome -->
  <link href="<?= $FontAwesomePath; ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
  <!-- Main Container -->
  <div class="container">
    <div class="row">
      <!-- Center Image Logo -->
      <img src="<?= $imagePath; ?>" class="rounded mx-auto d-block lp-logo" alt="Learning Platform Logo">
    </div>
    <!-- NavBar -->
      <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center order-2" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="frontend-drop">Front-End Development</a>
                    <div class="dropdown-menu mt-0" aria-labelledby="frontend-drop">
                      <a class="dropdown-item" href="#">HTML5</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">CSS</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">CSS3</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">SAAS</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">JQuery</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">JavaScript</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="backend-drop">Back-End Development</a>
                    <div class="dropdown-menu mt-0" aria-labelledby="backend-drop">
                      <a class="dropdown-item" href="#">SQL</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">PHP</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">ASP.NET</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">C#</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="backend-drop">Library</a>
                    <div class="dropdown-menu mt-0" aria-labelledby="backend-drop">
                      <a class="dropdown-item" href="#">Fabric.js</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Angular JS</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Toast.js</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">React JS</a>
                    </div>
                </li>
                <li class="nav-item pull-right">
                  <a class="nav-link" href="#">Login</a>
                </li>
              </ul>
        </div>
      </nav>
      <!-- /NavBar -->