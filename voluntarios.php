
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Galeria - Agua Panelitas con amor</title>
    <link rel="icon" href="assets/iconos/logo.svg" type="image/svg" sizes="16x16">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="floating-wpp.css">
    <script type="text/javascript" src="floating-wpp.js"></script>
</head>
<body>
    <!--cabeza-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
        <div class="col-md-3 col-3 d-flex align-items-center justify-content-center">
            <a href="index.html"><img src="assets/iconos/logo.svg" width="71px" height="73px"></a>
        </div>
        <div class="col-md-5">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="index.html">Inicio </a>
                  <a class="nav-item nav-link " href="mapa_sitio.html">Mapa del Sitio</a>
                  <a class="nav-item nav-link" href="sobre_nosotros.html">Quienes Somos</a>
                  <a class="nav-item nav-link" href="galeria.html">Galeria</a>
                  <a class="nav-item nav-link disabled" href="voluntarios.php">Voluntarios <span class="sr-only">(actual)</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-4 d-flex justify-content-end">
            <a href="donar.html"><button class="b-donar"><img src="assets/iconos/corazon.svg" height="30em"> DONAR</button></a>
        </div>
        <div class="col-md-2 col-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
      <!--//fin cabeza//-->
      <!--Cuerpo-->
      <div id="myButton"></div><!-- archivo whatssap-->
      <div class="banner1">
        <h1 class="py-3 cajitav">VOLUNTARIOS</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 contenedorform">
                    <div class="col-12"><h3 style="margin-top: 30px;" class="titulo">Formulario de voluntarios </h3></div>
                    
                    <div class="col-12  d-flex justify-content-center py-2">
                        <div class="form">
                            <input type="text" name="NamVal" required>
                            <label class="lbl-nombre" for="NamVal">
                                <span class="text-nomb" name="NamVal">Nombre</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-12  d-flex justify-content-center py-2">
                        <div class="form">
                            <input type="tel" name="TelVal" required>
                            <label class="lbl-nombre" for="TelVal">
                                <span class="text-nomb" name="TelVal">Telefono</span>
                            </label>
                            <?php
                            ?>
                        </div>
                    </div>
                    <div class="col-12  d-flex justify-content-center py-2">
                        <div class="form">
                            <input type="email" name="CorreoVal" required>
                            <label class="lbl-nombre" for="CorreoVal">
                                <span class="text-nomb" name="CorreoVal">Correo electronico</span>
                            </label>
                        </div>

                    </div>
                    <div class="col-12 py-4">
                        <div class="col-12 ">
                            <textarea cols="55" rows="6" placeholder="Mensaje" height="5em" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="col-12 py-1">
                        <button type="submit" class="b-enviar">Enviar</button>
                    </div>
                    <div class="my-1">&nbsp</div>
                </div>
            </div>
        </div>
      </div>
      <!--<div class="col-12 caja-titulo">
        <h3 class="my-3">PERSONAL</h3>
      </div>
      <div class="container contenedor-g">
        Galeria de Videos
      </div>
      <div class="container contenedor-g-2 d-flex align-items-center justify-content-center">
        Avanzar y retroceder galeria
      </div>-->
      <!--Fin Cuerpo-->
      <!--Pies-->
      <footer>
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-md-5 col-12">
                    <h2>Información</h2>
                    <p class="d-flex align-items-center">
                      Somos una campaña de la fundación Clinica del hogar sin ánimo de
                      lucro con 8 años de experiencia, pero que se oficializa en el 2015
                      como fundación bajo el mando de Harold Y Marta, sus fundadores.
                      Esta organización nace de una obra social, la cual durante
                      muchas noches les ha brindado felicidad a muchos habitantes de
                      calle, trabajadoras sexuales, gente de escasos recursos, y
                      actualmente a muchos venezolanos que viven en el lugar por
                      medio de oración, un plato de comida, aguapanela y pan.
                </div>
                <div class="col-md-7 col-12">
                    <h3>Contáctanos</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15906.332842582937!2d-74.1211337!3d4.6681518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae598a78c9f302f2!2sFundaci%C3%B3n%20Clinica%20del%20Hogar!5e0!3m2!1ses!2sco!4v1623882213194!5m2!1ses!2sco" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <p class="textc"><img src="assets/iconos/ubica.svg" height="30em">Av.Boyacá #64C - 02</p>
                    <p class="textc"><img src="assets/iconos/correo-electronico.svg" height="30em">   fundaacionclinicadelhogar@gmail.com</p>
                    <p class="textc"><img src="assets/iconos/telefono.svg" height="30em"> +57 310 2650688</p>
                </div>
                <div class="col-md-12 col-12 bordef" style="padding-top: 20px;"></div>
                <div class="col-md-12 col-12" style="padding-top: 20px;"><p>Copyright © AGUA PANELITAS CON AMOR 2021-2022</p></div>
            </div>
        </div>
    </footer>
    <!--//fin pies//-->
</body>
<!--Archivos de javascript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '573024949122',
            popupMessage: 'Hola, somos Agua Panelias con amor, como le puedo ayudar?',
            message: "Me gustaría saber acerca del proyecto",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Bienvenidos Agua Panelias con amor!',
            headerColor: '#7FA2EA', 
            backgroundColor: '#7FA2EA',
            buttonImage: '<img src="whatsApp.svg" />'
        });
    });
</script>
<!--Archivos de javascript-->
</html>