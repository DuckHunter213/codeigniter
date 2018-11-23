<?
if(session_status() == PHP_SESSION_NONE){
  //La sesion no ha sido iniciada
  session_start();
}
//Si esta logeado mandar a la página principal
if(isset($_SESSION['logeado'])){
  redirect("/");
}    
?>

<!DOCTYPE>
<html lang="es">
<head>
    <meta name="viewport" content="initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/resources/css/foundation.css"/>
	<link rel="stylesheet" type="text/css" href="/resources/css/app.css"/>

	<title>Optica Xalapa</title>
</head>
<body>
<div class="title-bar hidden-for-large" data-responsive-toggle="main-menu" data-hide-for="medium" data-e="y4mtcp-e">
    <button class="menu-icon" type="button" data-toggle=""></button>
    <div class="title-bar-title">Menu</div>
</div>
<div class="top-bar hide-for-medium hide-for-large align-left" id="main-menu" style="display: none;">
    <ul class="vertical menu">
        <li><a href="/Account/login">Iniciar Sesión</a> </li>
    </ul>
</div>

<div class="top-bar hide-for-small-only">
    <ul class="menu">
        <li><a href="/Account/login">Iniciar Sesión</a> </li>
    </ul>
</div>
<div class="grid-x grid-padding-x custom-container align-center">
