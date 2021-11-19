<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="chiphysi" content="Bootstrap HTML5">
    <meta name="chiphysi" content="HTML5, CSS3, JavaScript">
    <link rel="shortcut icon" href="img/usuario.png">
<!-- Ingresamos los links: estilos, bootstrap, script -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" ></script>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  </head>

<body>
  <style>body{background-color: rgba(8,15,40,60);}</style>
<nav>
  <div></div>
    <ul class="menu">
			<li><a href="#"><h2 class="far"><i class="far fa-user"> Perfil</i></h2></a></li>
			<li><a href="#">Membresía</a></li>
			<li><a href="#">Alquileres</a></li>
			<li><a href="#">Acerca De</a></li>
			<li><a href="#">Cerrar Sesión</a></li>
		</ul>
</nav>
      <section>

                <div id="ejemplodevista" class="carousel slide" data-ride="carousel">
                    
                <ol class="carousel-indicators">
                      <li data-target="#ejemplodevista" data-slide-to="0" class="active"></li>
                      <li data-target="#ejemplodevista" data-slide-to="1" ></li>
                      <li data-target="#ejemplodevista" data-slide-to="2" class="openid"></li>
                    </ol>

<!-- Primera vista -->
<br><br>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
<!--pagina-->
                      <h1><center><font color="white" face="sans-serif">COMPRA DE PELICULAS ALQUILER PROGRAMACIÓN</font></center></h1>          
  <br><br>
    <div class="container-fluid">
        <div class="row">
        <aside id="columna" class="col-md-3">
             
           <div class="list list-group">
  <a href="#" class="list-group-item active">
    <center>Categoría</center>
  </a>
               
  <a href="#accion" class="gen list-group-item" color="black"><center>Acción</center></a>
    <a href="#" class="gen list-group-item"><center>Ciencia ficción</center></a>
     <a href="#" class="gen list-group-item"><center>Comedia</center></a>
      <a href="#" class="gen list-group-item"><center>Drama</center></a>
        <a href="#" class="gen list-group-item"><center>Fantasía</center></a>
         <a href="#" class="gen list-group-item"><center>Melodrama</center></a>
           <a href="#" class="gen list-group-item"><center>Musical</center></a>
             <a href="#" class="gen list-group-item"><center>Romance</center></a>
              <a href="#" class="gen list-group-item"><center>Suspenso</center></a>
                <a href="#" class="gen list-group-item"><center>Terror </center></a>
 				   <a href="index.php" class="list-group-item active"><center>Cerrar sesión</center></a>
</div>
        </aside>

        <section id="seccion" class="col-md-8">
            <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/venom.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Venom</h3>
            <p>Venom es una película de supervillanos, basada en el personaje de Marvel, Venom, dirigida por Ruben Fleischer. La película pretende ser la primera en el Universo Marvel de Sony​, adjunta pero separada del Universo cinematográfico de Marvel.</p>
            <p><a href="https://es.wikipedia.org/wiki/Venom_(pel%C3%ADcula_de_2018)" class="btn btn-primary "  role="button">Ver</a>
			<a href="#" class="btn btn-danger producto" precio="7" titulo="Venom"role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/piegrande.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Pie pequeño</h3>
            <p>Smallfoot es una película estadounidense musical de comedia y aventura animada por computadora producida por Warner Animation Group.</p>
            <p><a href="https://es.wikipedia.org/wiki/Smallfoot" class="btn btn-primary "  role="button">Ver</a> 
			<a href="#" class="btn btn-danger producto" precio="7" titulo="Pie pequeño" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/reloj.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>La casa con un reloj en sus paredes</h3>
            <p>The House with a Clock in Its Walls es una película estadounidense de comedia-terror y fantasía gótica dirigida por Eli Roth y escrita por Eric Kripke. Está basada en la novela del mismo nombre escrita por John Bellairs e ilustrada por Edward Gorey.</p>
            <p><a href="https://es.wikipedia.org/wiki/The_House_with_a_Clock_in_Its_Walls_(pel%C3%ADcula)" class="btn btn-primary" role="button">Ver</a> 
			<a href="#" class="btn btn-danger producto" precio="7" titulo="La casa con un reloj en sus paredes" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/buscando.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Buscando...</h3>
            <p>Searching es una película estadounidense de suspenso psicológico dirigida por Aneesh Chaganty y protagonizada por John Cho y Debra Messing. La película está filmada desde el punto de vista de pantallas de celulares y computadoras, y sigue la historia de un padre intentando encontrar a su hija de 16 años perdida.</p>
            <p><a href="https://es.wikipedia.org/wiki/Searching_(pel%C3%ADcula)" class="btn btn-primary" role="button">Ver</a> 
			<a href="#" class="btn btn-danger producto" precio="7" titulo="Buscando..." role="button">Comprar</a></p>
          </div>
        </div>
      </div>





        <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/halloween.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Halloween</h3>
            <p>Halloween es una próxima película estadounidense de slasher dirigida por David Gordon Green y escrita por Green y Danny McBride. Es la undécima entrega de la franquicia de Halloween, retomando cuarenta años después de los eventos de la película original sin tener en cuenta las secuelas anteriores.​</p>
            <p><a href="https://es.wikipedia.org/wiki/Halloween_(pel%C3%ADcula_de_2018)" class="btn btn-primary "  role="button">Ver</a>
      <a href="#" class="btn btn-danger producto" precio="7" titulo="Halloween"role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/inmortal.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Enemigo inmortal</h3>
            <p>Bleeding Steel es una película de ciencia ficción de 2017 dirigida y escrita por Leo Zhang y portagonizada por Jackie Chan, Show Luo, Ouyang Nana y Callan Mulvey. Fue estrenada en China el 22 de diciembre de 2017.​</p>
            <p><a href="https://es.wikipedia.org/wiki/Bleeding_Steel" class="btn btn-primary "  role="button">Ver</a> 
      <a href="#" class="btn btn-danger producto" precio="7" titulo="Enemigo inmortal" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/monja.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>La monja</h3>
            <p>Una monja se suicida en una abadía rumana y El Vaticano envía a un sacerdote y una novicia a investigar lo sucedido. Lo que ambos encuentran allá es un secreto perverso que les enfrentará cara a cara con el mal en su esencia más pura.</p>
            <p><a href="" class="btn btn-primary" role="button">Ver</a>
             <a href="#" class="btn btn-danger producto" precio="7" titulo="La monja" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/amor.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>El amor menos pensado</h3>
            <p>Luego de vivir casados más de 25 años, Marcos y Ana atraviesan una crisis que los lleva a separarse, pero la nueva vida de solteros no resulta como pensaban.</p>
            <p><a href="" class="btn btn-primary" role="button">Ver</a> 
      <a href="#" class="btn btn-danger producto" precio="7" titulo="El amor menos pensado" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
    </div> 
        </section>
        </div>
    </div>
                        <div class="carousel-caption d-none d-md-block">
                        <br><br>
                          <h5 class="font-weight-bold">Mis películas</h5>
                        </div>
                      </div>
<!-- Segunda vista -->
                      <div name="accion" class="carousel-item img-2 min-vh-100 ">
                      <section id="seccion" class="col-md-8">
                          <br><br><br><br>
                          <aside class="col-md-3">
             
             <div class="list list-group">
    <a href="#" class="list-group-item active">
      <center>Categoría</center>
    </a>
                 
    <a href="#accion" class="gen list-group-item" color="black"><center>Acción</center></a>
      <a href="#" class="gen list-group-item"><center>Ciencia ficción</center></a>
       <a href="#" class="gen list-group-item"><center>Comedia</center></a>
        <a href="#" class="gen list-group-item"><center>Drama</center></a>
          <a href="#" class="gen list-group-item"><center>Fantasía</center></a>
           <a href="#" class="gen list-group-item"><center>Melodrama</center></a>
             <a href="#" class="gen list-group-item"><center>Musical</center></a>
               <a href="#" class="gen list-group-item"><center>Romance</center></a>
                <a href="#" class="gen list-group-item"><center>Suspenso</center></a>
                  <a href="#" class="gen list-group-item"><center>Terror </center></a>
              <a href="index.php" class="list-group-item active"><center>Cerrar sesión</center></a>
  </div>
          </aside>
            <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/halloween.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Halloween</h3>
            <p>Halloween es una próxima película estadounidense de slasher dirigida por David Gordon Green y escrita por Green y Danny McBride. Es la undécima entrega de la franquicia de Halloween, retomando cuarenta años después de los eventos de la película original sin tener en cuenta las secuelas anteriores.​</p>
            <p><a href="https://es.wikipedia.org/wiki/Halloween_(pel%C3%ADcula_de_2018)" class="btn btn-primary "  role="button">Ver</a>
      <a href="#" class="btn btn-danger producto" precio="7" titulo="Halloween"role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/inmortal.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Enemigo inmortal</h3>
            <p>Bleeding Steel es una película de ciencia ficción de 2017 dirigida y escrita por Leo Zhang y portagonizada por Jackie Chan, Show Luo, Ouyang Nana y Callan Mulvey. Fue estrenada en China el 22 de diciembre de 2017.​</p>
            <p><a href="https://es.wikipedia.org/wiki/Bleeding_Steel" class="btn btn-primary "  role="button">Ver</a> 
      <a href="#" class="btn btn-danger producto" precio="7" titulo="Enemigo inmortal" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/monja.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>La monja</h3>
            <p>Una monja se suicida en una abadía rumana y El Vaticano envía a un sacerdote y una novicia a investigar lo sucedido. Lo que ambos encuentran allá es un secreto perverso que les enfrentará cara a cara con el mal en su esencia más pura.</p>
            <p><a href="" class="btn btn-primary" role="button">Ver</a>
             <a href="#" class="btn btn-danger producto" precio="7" titulo="La monja" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/amor.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>El amor menos pensado</h3>
            <p>Luego de vivir casados más de 25 años, Marcos y Ana atraviesan una crisis que los lleva a separarse, pero la nueva vida de solteros no resulta como pensaban.</p>
            <p><a href="" class="btn btn-primary" role="button">Ver</a> 
      <a href="#" class="btn btn-danger producto" precio="7" titulo="El amor menos pensado" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/resaca.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Juegos de la Resaca</h3>
            <p>The Hungover Games es una película de parodias de 2014, dirigida por Josh Stolberg. El título de la película y la trama central se basan tanto en The Hangover y The Hunger Games,2​ así como parodiando a Ted, Pirates of the Caribbean, Avatar, Charlie and the Chocolate Factory, The Human Centipede, The Lone Ranger, Django Unchained, Thor, Carrie, District 9 y The Real Housewives.</p>
            <p><a href="" class="btn btn-primary" role="button">Ver</a> 
      <a href="#" class="btn btn-danger producto" precio="7" titulo="El amor menos pensado" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
    </div> 
        </section>
        </div>
    </div>
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Seleccione un libro</h5>
                        
                        </div>
                      </div>
<!-- Tercera vista -->
                      <div class="carousel-item img-3 min-vh-100 openid">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Mas libros</h5>
                        </div>
                      </div>
                    </div>
<!-- Boton de vista -->           
                    <a class="carousel-control-prev" href="#ejemplodevista" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Vista Previa</span>
                    </a>
<!-- Boton de la segunda vista  -->
                    <a class="carousel-control-next" href="#ejemplodevista" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                  </div>
            </div>
<!--  Ejecutamos bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
