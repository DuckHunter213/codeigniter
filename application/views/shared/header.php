<?
if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}
//Redirrecion de logueo
if(!isset($_SESSION['logeado'])){
  redirect("/Account/login");
}    
?>

<!DOCTYPE>
<html lang="es">
<head>
  <meta name="viewport" content="initial-scale=1">
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/resources/css/foundation.css"/>
	<link rel="stylesheet" type="text/css" href="/resources/css/app.css"/>

	<meta charset="utf-8">
	<title>Optica Xalapa</title>
</head>
<body>

<div class="title-bar hidden-for-large" data-responsive-toggle="main-menu" data-hide-for="medium" data-e="y4mtcp-e">
    <button class="menu-icon" type="button" data-toggle=""></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar hide-for-large hide-for-medium-only align-left" id="main-menu" style="display: none;">
    <ul class="vertical menu">
    <li class="menu-text" onclick="linkTo('/')">Optica Xalapa</li>
      <li>
        <a href="/Clientes/index">Clientes</a>
        <ul class="menu vertical">
          <li><a href="/Clientes/create">Nuevo Cliente</a></li>
        </ul>
      </li>
      <!-- 
      <li>
        <a href="/Ventas/index">Ventas</a>
      </li>
      <li>
        <a href="/Empleados/index">Empleados</a>
        <ul class="menu vertical">
          <li><a href="/Empleados/create">Registar nuevo empleado</a></li>
        </ul>
      </li>
      <li>
        <a href="/Garantias/index">Garantías</a>
        <ul class="menu vertical">
          <li><a href="/Garantias/create">Realizar una garantía</a></li>
        </ul>
      </li>
      <li><a href="/Inventario/Lente/index">Inventario</a></li>
      <li><a href="#">Pacientes</a></li> -->
    </ul>
    
    <div class="top-bar-right">
    <ul class="menu">
      <li><a href="/Account/logout">Cerrar Sesión</a></li>
    </ul>
</div>
</div>

<div class="top-bar hide-for-small-only">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text" onclick="linkTo('/')">Optica Xalapa</li>
    <li>
      <a href="/Clientes/index">Clientes</a>
      <ul class="menu vertical">
        <li><a href="/Clientes/create">Nuevo Cliente</a></li>
      </ul>
    </li>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><a href="/Account/logout">Cerrar Sesión</a></li>
    </ul>
  </div>
</div>
<div class="grid-x grid-padding-x custom-container">