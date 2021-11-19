<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="chiphysi" content="Bootstrap HTML5">
  <meta name="chiphysi" content="HTML5, CSS3, JavaScript">
  <link rel="shortcut icon" href="img/usuario.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/hoverstyle.css">
  <!-- Ingresamos los links: estilos, bootstrap, script -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ffec4ec2ed.js"></script>
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>

</head>

<body>
<style>body{background-color: rgba(8,15,40,60);}</style>
  <nav>
    <ul class="menu col-md-12 text-center">
      <!-- <li><a href="#">
          <h2><i class="far fa-user"> Perfil</i></h2>
        </a></li> -->
      <li><a href="#">Perfil</a></li>
      <li><a href="#">Membresía</a></li>
      <li><a href="#">Categoría</a></li>
      <li><a href="#">Alquileres</a></li>
      <li><a href="#">Acerca De</a></li>
      <li><a href="#">Cerrar Sesión</a></li>
    </ul>
  </nav>

  <div id="ejemplodevista" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#ejemplodevista" data-slide-to="0" class="active"></li>
      <li data-target="#ejemplodevista" data-slide-to="1"></li>
      <li data-target="#ejemplodevista" data-slide-to="2"></li>
    </ol>

    <br><br>

    <!-- Carusel -->
    <div class="carousel-inner">

      <!-- Primera vista -->
      <div class="carousel-item img-1 min-vh-100 active">

        <h1 class="mb-4">
          <center>
            <font color="white" face="sans-serif">COMPRA DE PELICULAS RECIÉN ESTRENADAS</font>
          </center>
        </h1>

        <div class="container">
          <div class="row text-justify p-body">

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/wfjlNisONJY">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x180" src="img/venom2.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>Venom 2</h3>
            <p>Venom: Let There Be Carnage es una película estadounidense de superhéroes basada en el personaje de Marvel Comics, Venom, producida por Columbia Pictures en asociación con Marvel y Tencent Pictures y distribuida por Sony Pictures Releasing. Es la secuela de Venom, y la segunda película dentro del Universo Spider-Man de Sony.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Venom"role="button">Comprar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/KJOd3poTq_I">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/chaos.png" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>El Caos Andante</h3>
            <p>Chaos Walking es una película de acción distópica estadounidense de 2021 dirigida por Doug Liman a partir de un guion de Patrick Ness y Christopher Ford. Se basa en la trilogía de ciencia ficción Chaos Walking, adaptando su primer libro, The Knife of Never Letting Go, de Patrick Ness, publicado en 2008.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Pie pequeño" role="button">Comprar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/jEFTyAXOJ58">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/spiderman.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>Spiderman: No Way Home</h3>
            <p>Tras los acontecimientos de Spider-Man: Far From Home, ​ un joven Peter Parker ve como su reputación y su vida normal se ponen patas arriba cuando su identidad secreta queda expuesta a causa de Mysterio. Al buscar la ayuda de Stephen Strange para intentar arreglarlo todo, las cosas pronto se vuelven mucho más peligrosas y Parker debe encontrar lo que realmente significa ser Spider-Man.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="La casa con un reloj en sus paredes" role="button">Comprar</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
        <div class="contenedor">
              <a href="https://youtu.be/gmRKv7n2If8">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/cruella.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>Cruella</h3>
            <p>Cruella es una película estadounidense de 2021 de drama criminal basada en el personaje Cruella de Vil de la novela 101 dálmatas de 1956 de Dodie Smith y en su correspondiente adaptación cinematográfica animada de 1961 producida por Disney. ​ La película esta dirigida por Craig Gillespie con un guion de Dana Fox y Tony McNamara, de una historia de Aline Brosh McKenna, Kelly Marcel y Steve Zissis.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Buscando..." role="button">Comprar</a></p>
          </div>
        </div>
      </div>


            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/v1EkoQV4g5c">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/eterna.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Eternals</h3>
                  <p>Los Eternos son una raza de seres inmortales con poderes sobrehumanos que han vivido en secreto en la Tierra durante miles de años. Aunque nunca han intervenido, ahora una amenaza se cierne sobre la humanidad.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Eterna" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/RIKOJP9PHP0">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/kvg.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Kong vs Godzilla</h3>
                  <p>Cinco años después de que Godzilla derrotara a King Ghidorah, Kong es vigilado por Monarch dentro de una cúpula gigante en la Isla de la Calavera. Kong recibe la visita de Jia, la última nativa de Iwi y la hija adoptiva de la experta en Kong Ilene Andrews, que es sorda y se comunica con Kong a través del lenguaje de signos.​</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Enemigo inmortal" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/MBkwxn1ogTI">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/way.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Way Down</h3>
                  <p>Nadie ha podido robar el Banco de España. Una entidad financiera absolutamente inexpugnable. Pero este misterio no  asusta a Thom Johnson (Freddie Highmore), el brillante y joven ingeniero reclutado para averiguar cómo acceder a su interior. En diez días, Thom y su equipo tendrán que descubrir el secreto de la caja, montar un plan y preparar el asalto.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="La monja" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/I-iJbMA3aoA">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/hall.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Halloween Kills</h3>
                  <p>Laurie Strode (Jamie Lee Curtis) vuelve a enfrentarse a su viejo archienemigo Michael Myers. Esta continuación del reboot de La noche de Halloween (2018), basada en el clásico de terror de 1978 dirigido por John Carpenter, es la segunda entrega de esta saga producida por Blumhouse.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="El amor menos pensado" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <br><br><br><br>
        <div class="carousel-caption d-none d-md-block">
          
          <h5 class="font-weight-bold">Recién estrenadas</h5>
        </div>
      </div>

      <!-- Segunda vista -->
      <div class="carousel-item img-3 min-vh-100">
        <h1 class="mb-4">
          <center>
            <font color="white" face="sans-serif">COMPRA DE SERIES MÁS VISTAS</font>
          </center>
        </h1>

        <div class="container">
          <div class="row text-justify p-body">

          <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/yX5Py7lL5dw">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x180" src="img/lupin.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>Lupin</h3>
            <p>La historia sigue al ladrón profesional Assane Diop, el único hijo de un inmigrante de Senegal que había llegado a Francia para buscar una vida mejor para su hijo. El padre de Assane es incriminado por el robo de un costoso collar de diamantes por parte de su empleador, el rico y poderoso Hubert Pellegrini. El padre es apresado por la policía de Francia y mandado a prisión.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Venom"role="button">Comprar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/Mj4_xG5NXeo">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x180" src="img/squirt.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>El Juego del Calamar</h3>
            <p>La serie se centra en un concurso en el que 456 jugadores, todos de diferentes ámbitos de la vida, pero todos profundamente endeudados, juegan a una serie de juegos infantiles con consecuencias fatales si pierden, para tener la oportunidad de ganar 45 600 millones de wones.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Venom"role="button">Comprar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/cIwyy22oij0">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x180" src="img/hawkeye.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>Hawkeye</h3>
            <p>Mientras está en la ciudad de Nueva York después del chasquido de Hulk, Clint Barton debe trabajar junto con la joven Kate Bishop para enfrentarse a los enemigos de su tiempo pasado como Ronin para poder volver con su familia a tiempo para Navidad.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Venom"role="button">Comprar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail" style="width: 80%">
          <div class="contenedor">
              <a href="https://youtu.be/5cOfyLkQRGk">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x180" src="img/brid.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
          <div class="caption">
            <h3>Bridgerton</h3>
            <p>Los Bridgerton es una serie que cuenta desde una perspectiva feminista una historia de amor durante el Período de Regencia en el Reino Unido. La ficción indaga en las vidas ricas, divertidas, tristes, sexuales, magnificas e incluso solitarias de las mujeres y hombres de la alta sociedad londinense.</p>
            <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Venom"role="button">Comprar</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/kDIlADvnC_s">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/tronos.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Juego de Tronos</h3>
                  <p>El libro mejor vendido de la serie "A Song of Ice and Fire" escrito por George R.R, es llevado a la pantalla chica cuando HBO decide recrear esta historia épica de fantasía. Es la descripción de dos familias poderosas, reyes y reinas, caballeros y renegados, hombres falsos y honestos, haciendo parte de un juego mortal por el control de los Siete Reinados de Westeros y por sentarse en el trono más alto.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Eterna" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/fNwMm9DDUb0">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/madmen.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Mad Men</h3>
                  <p>En Nueva York durante los años 60, el dominante líder Don Draper lucha por mantenerse en la cima del grupo en las oficinas de la agencia de publicidad Sterling Cooper en la Avenida Madison donde existe mucha presión. Además de ser uno de los hombres más importantes de la agencia publicitaria, Don es también un hombre de familia, y padre de niños pequeños.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="Enemigo inmortal" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/VppaiWZJ1s4">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/simpson.png" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Los Simpsons</h3>
                  <p>La comedia de dibujos animados se centra en una familia que vive en la ciudad de Springfield. La cabeza de la familia Simpson es Homero, quien no es un hombre de familia típico, obrero de una planta nuclear, él hace lo mejor para poder liderar a su familia, pero frecuentemente se da cuenta que son ellos los que lo mandan. La familia se compone de la matriarca amorosa, Marge, de cabello azul, el hijo agitador Bart, la hija aplicada Lisa y la bebé Maggie.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="La monja" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
              <div class="contenedor">
              <a href="https://youtu.be/I-iJbMA3aoA">
                <figure>
                  <img data-src="holder.js/100%x200" alt="100%x200" src="img/hall.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                  <div class="capa">
                    <h3>Visualizar trailer</h3>
                  </div>
                </figure>
              </a>
          </div>
                <div class="caption">
                  <h3>Halloween Kills</h3>
                  <p>Laurie Strode (Jamie Lee Curtis) vuelve a enfrentarse a su viejo archienemigo Michael Myers. Esta continuación del reboot de La noche de Halloween (2018), basada en el clásico de terror de 1978 dirigido por John Carpenter, es la segunda entrega de esta saga producida por Blumhouse.</p>
                  <p><a href="#" class="btn btn-danger producto" precio="7" titulo="El amor menos pensado" role="button">Comprar</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-caption d-none d-md-block">
          <br><br>
          <h5 class="font-weight-bold">Series Completas</h5>
        </div>

      </div>

      <!-- Tercera vista -->
      <div class="carousel-item img-3 min-vh-100">
        <h1 class="mb-4">
          <center>
            <font color="white" face="sans-serif">COMPRA DE PELICULAS INFANTILES MÁS VISTAS</font>
          </center>
        </h1>

        <div class="container-fluid">
          <div class="row text-justify p-body">

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
                <img data-src="holder.js/100%x200" alt="100%x200" src="img/halloween.jpg" data-holder-rendered="true"
                  style="height: 200px; width: 100%; display: block;">
                <div class="caption">
                  <h3>Halloween</h3>
                  <p>Halloween es una próxima película estadounidense de slasher dirigida por David Gordon Green y
                    escrita por Green y Danny McBride. Es la undécima entrega de la franquicia de Halloween, retomando
                    cuarenta años después de los eventos de la película original sin tener en cuenta las secuelas
                    anteriores.​</p>
                  <p><a href="https://es.wikipedia.org/wiki/Halloween_(pel%C3%ADcula_de_2018)" class="btn btn-primary "
                      role="button">Ver</a>
                    <a href="#" class="btn btn-danger producto" precio="7" titulo="Halloween" role="button">Comprar</a>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
                <img data-src="holder.js/100%x200" alt="100%x200" src="img/inmortal.jpg" data-holder-rendered="true"
                  style="height: 200px; width: 100%; display: block;">
                <div class="caption">
                  <h3>Enemigo inmortal</h3>
                  <p>Bleeding Steel es una película de ciencia ficción de 2017 dirigida y escrita por Leo Zhang y
                    portagonizada por Jackie Chan, Show Luo, Ouyang Nana y Callan Mulvey. Fue estrenada en China el 22
                    de diciembre de 2017.​</p>
                  <p><a href="https://es.wikipedia.org/wiki/Bleeding_Steel" class="btn btn-primary "
                      role="button">Ver</a>
                    <a href="#" class="btn btn-danger producto" precio="7" titulo="Enemigo inmortal"
                      role="button">Comprar</a>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
                <img data-src="holder.js/100%x200" alt="100%x200" src="img/way.jpg" data-holder-rendered="true"
                  style="height: 200px; width: 100%; display: block;">
                <div class="caption">
                  <h3>Way Down</h3>
                  <p>Nadie ha podido robar el Banco de España. Una entidad financiera absolutamente inexpugnable. Pero este misterio no  asusta a Thom Johnson (Freddie Highmore), el brillante y joven ingeniero reclutado para averiguar cómo acceder a su interior. En diez días, Thom y su equipo tendrán que descubrir el secreto de la caja, montar un plan y preparar el asalto.</p>
                  <p><a href="" class="btn btn-primary" role="button">Ver</a>
                    <a href="#" class="btn btn-danger producto" precio="7" titulo="La monja" role="button">Comprar</a>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail" style="width: 80%">
                <img data-src="holder.js/100%x200" alt="100%x200" src="img/amor.jpg" data-holder-rendered="true"
                  style="height: 200px; width: 100%; display: block;">
                <div class="caption">
                  <h3>El amor menos pensado</h3>
                  <p>Luego de vivir casados más de 25 años, Marcos y Ana atraviesan una crisis que los lleva a
                    separarse, pero la nueva vida de solteros no resulta como pensaban.</p>
                  <p><a href="" class="btn btn-primary" role="button">Ver</a>
                    <a href="#" class="btn btn-danger producto" precio="7" titulo="El amor menos pensado"
                      role="button">Comprar</a>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-caption d-none d-md-block">
          <br><br>
          <h5 class="font-weight-bold">Clásicos</h5>
        </div>
      </div>

    </div>

  </div>


  </div>



  </div>
  <!-- Boton de vista -->
  <a class="carousel-control-prev" href="#ejemplodevista" role="button" data-slide="prev" style="width: 2.5%">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Vista Previa</span>
  </a>

  <!-- Boton de la segunda vista  -->
  <a class="carousel-control-next" href="#ejemplodevista" role="button" data-slide="next" style="width: 2.5%">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>

  </div>
  </div>

  <!--  Ejecutamos bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</body>

</html>