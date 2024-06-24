
<!DOCTYPE html>
<html lang="es">
<head> <!-- head encabezado de la pagina todo lo que no esta estructurado
  -->
	<meta charset="utf-8">
	<title>mariano zalazar</title><?php include("ingles.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
	  <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0">

</head>
<body>
<header>

   <!-- encabezado de pagina menu y nombre
  -->
	<h1>Mariano Emanuel ZALAZAR</h1>
	<nav><a href="#sesion"  onclick="mostrar();">menu</a>
    <!--lista de menu
  -->
	<ul style="display: none;" id="lista">
  <li><a href="#primera">presentacion</a></li>
  <li><a href="#segunda">historia acdemica</a></li>
  <li><a href="#tercera">programacion</a></li>
  <li><a href="#cuarta">mensaje</a></li>
  <li><a href="#quinta">contactos</a></li>
  <li><a href="#quinta" onclick="cv()">mi cv</a></li>
</ul> 


</nav></header>
<section id="primera"><!--

      primera parte de la secciones
  -->
<div class="container text-center" id="caja1">
  <div class="row align-items-center" id="presentar">
    <div class="col-4" id="col1">
     <img id="img" src="foto/perfilf.jpg" alt="foto de perfil">
    </div> 
    <div class="col-8" id="col2">
    <h2>Hola, soy yo</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!--
	-->
    </div>
    
  </div>
</div ></section><!--

      segunda parte de la secciones
 conlas tablas de programacion  -->
<section id="segunda">
<div id="botonera">
    <input type="checkbox" name="filtro" id="checkcarrera" onchange="cursos()"><level>carrera</level>
<input type="checkbox" name="filtro" id="checkcurso" onchange="cursos2()"><level>cursos</level>
  </div>

<div id="tablas">
 
<div id="tabla1" style="display: none;" class="tabla">
  <?php 
      $tabla1=fopen('tabla1.txt', 'r');
        fpassthru($tabla1);
      fclose($tabla1);
     ?>
	</div>
 <div id="tabla2" style="display: none;"  class="tabla">
 <?php 
      $tabla2=fopen('tabla2.txt', 'r');
      fpassthru($tabla2);
      fclose($tabla2);
     ?>
</div>
</div>
</section >
<section id="tercera">

  <!--

    3ra parte de la secciones
 proyectos con caroussel  

	<div id="cuadro"><h5 class="algo">portafolio de proyectos</h5>
   


<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    -->
<!--

      cuadro con boton
  -->
<!--

      <div class="card" style="width: 18rem;">
  <img src="foto/soldadura/impresora3d.jpg" class="card-img-top" alt="pagina web">
  <div class="card-body">
    <h5 class="card-title"> la colmena 3d</h5>
    <p class="card-text">primer proyecto web, la cual esta diseñada para impresores 3d </p>
    <a href="#" class="btn btn-primary">ir a pagina</a>
     </div>
     </div>
 







     
    </div>
    <div class="carousel-item" data-bs-interval="2000">
-->

<!--

      cuadro con boton
  -->
<!--
       <div class="card" style="width: 18rem;">
  <img src="foto/portafolioweb/electronica.jpg" class="card-img-top" alt="pagina web">
  <div class="card-body">
    <h5 class="card-title">el polo mecatronico</h5>
    <p class="card-text">pagina e-commer para la venta de producto .</p>
    <a href="#" class="btn btn-primary">ir a pagina</a>
  </div>
</div>






      
    </div>
    <div class="carousel-item">
-->
<!--

      cuadro con boton
  -->

<!--
       <div class="card" style="width: 18rem;">
  <img src="foto/portafolioweb/educar.jpg" class="card-img-top" alt="pagina web">
  <div class="card-body">
    <h5 class="card-title">espacio educa web</h5>
    <p class="card-text">espacio de educacion web -Esteban Echeverria  </p>
    <a href="#" class="btn btn-primary">ir a pagina</a></div>
  </div>
</div>




      
    </div>
  </div>

</div>


	

 

   


 


</div>-->
<div id="programas"><h5 class="algo">stack</h5>
  <div id="conjunto">
     <div id="logotipo">
    <img src="foto/c.png" alt="foto logo de c"id="c" class="logo" title="programacion" onfocus="c();">
    <img src="foto/javascript.png" alt="foto logo de javascrit"id="javascript" class="logo" title="programacion from" onfocus="javascript();">
    <img src="foto/html.png" alt="foto logo de html5"id="html" class="logo" title="estructura de pagina" onfocus="html();">
    <img src="foto/css.png" alt="foto logo de css"id="css" class="logo" title="hojas de estilo"onfocus="css();">
    <img src="foto/php2.png" alt="foto logo de php"id="php" class="logo" title=" programacion back-kent"
    onfocus="php();">
    
    <img src="foto/cobol.png" alt="foto logo de cobol"id="cobol" class="logo" title="programacion cobol" onfocus="cobol();">
    
    
    
    <img src="foto/jquery.png" alt="foto logo de jquery"id="jquery" class="logo" title="fremwork" onfocus="jquery();">
    <img src="foto/angular.png" alt="foto logo de angular"id="angular" class="logo" title="fremwork" onfocus="angular();">
    <img src="foto/react.png" alt="foto logo de react"id="react" class="logo" title="fremwork" onfocus="react();">
    <img src="foto/bootsprap.png" alt="foto logo de bootstrap"id="bootstrap" class="logo" title="fremwork"
    onfocus="bootstrap();">
    <img src="foto/workpress.png" alt="foto logo de workpress"id="workpress" class="logo" title="workpress cms" onfocus="workpress();">
    <img src="foto/sql.png" alt="foto logo de sql"id="sql" class="logo" title="base de datos"onfocus="sql()";>
    <img src="foto/bd2.png" alt="foto logo de bd2"id="bd2" class="logo" title="base de datos" onfocus="bd2()";>
    </div> 
      <div id="texto">
        <div id="cuadrodeinteraccion"> <h5>hola!!!</h5> 
            <p id="pc">Hola, como estan el cuadro2 desaparecio </p> 
            </div> 
            <div id="cuadrito2"> 
             <h5>hola!!!</h5><p id="pc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              
            </p>   </div>
            

    </div>
    </div>
</div>



</section>

<section id="critica">
   <div id="c">
     
      <button id="c1" onclick="hacer();">hacer un comentario</button>

   </div>
   <div class="modal" id="modal">
    <span class="close">&times;</span>
    
 <form onclick="iniciar();" action="contactof.php"   method="post" id="comentario" name="formu" >
  

<h5>comentarios, las criticas constructivas son bien resibidas</h5>
  <input type="texta" id="nombre" name="nombre" placeholder="nombre y apellido" required>
  <input type="email" id="email" name="email" placeholder="email" required >

   <div class="rating">
    <h5>califica:</h5>

  <input type="radio" id="star5" name="rating" value="5">
  <label for="star5" title="Excelente">&#9733;</label>
  <input type="radio" id="star4" name="rating" value="4">
  <label for="star4" title="Muy bueno">&#9733;</label>
  <input type="radio" id="star3" name="rating" value="3">
  <label for="star3" title="Bueno">&#9733;</label>
  <input type="radio" id="star2" name="rating" value="2">
  <label for="star2" title="Regular">&#9733;</label>
  <input type="radio" id="star1" name="rating" value="1">
  <label for="star1" title="Malo">&#9733;</label>
</div>


  <textarea id="texta" placeholder="comentario" name="comentario" required ></textarea >

  <input type="submit" id="enviar"  >


</form>
<?php  include("email.php"); ?>
 <?php  include("comentarios.php"); ?>
 </div>

<!--<div id="camentarios">
 

    
      $archivo2=fopen('comentarios.txt', 'r');
        
        fpassthru($archivo2);
      fclose($archivo2);
   
</div>-->
</section>
 <section id="quinta">
<footer><h5>contactos</h5>
<ul id="contacto">
  <li>email:zalazar.unlz@gmail.com</li>
  <li>tel/cel: 11-21822688</li>
  <li><a href="git@github.com:maritolafe/portafoliopersonal.git">github</a></li>
  <li ><button><a download="descargar" href="CopiacvMarianozalazar.pdf">mi cv</a></button></li>

</ul></footer></section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/cajas.js"></script>
<script type="text/javascript" src="js/cuadro.js"></script>
<script type="text/javascript" src="js/curso.js"></script>
<script type="text/javascript" src="js/reenvio.js"></script>
</html>
