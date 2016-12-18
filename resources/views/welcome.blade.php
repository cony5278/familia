<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EVSSA S.A.S</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link href="css/base.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/formularios.js') }}"></script>

</style>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="position:relative;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a style="position:absolute;left:0px;top:-10px;" class="navbar-brand page-scroll" href="#page-top"><img src="img/logo5.png" width="50" height="40"></a>
           <a style="position:absolute;left:50px;" class="navbar-brand page-scroll" href="#page-top">EVSSA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Acerca</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Nuestro Equipo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                    <li>
                    <a>
                        <div class="redes-sociales-facebook ">
                            <span class="fa fa-facebook"></span>
                          </div>
                    </a>
                    </li>
                     <li>
                     <a>
                        <div class="redes-sociales-twitter">
                            <span class=" fa fa-twitter"></span>
                          </div>
                    </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  
    <header>
        
        <div class="header-content">
            <div class="header-content-inner">
            @if (Session::has('mensaje'))
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Exito!</strong> {{Session::get('mensaje')}}
            </div>
            @endif
                <h1 id="homeHeading">ESTRUCTURAS, SOFTWARE Y TECNOLOGÍA AMBIENTAL</h1>
                <hr>
                <p>Tecnologia e innovacion para el ambiente.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Mas información</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">¿Quiénes Somos?</h2>
                    <hr class="light">                   
                    <p class="text-faded">
                    Trabajamos para aportar soluciones innovadoras, 
                    mediante un proceso de permanente actualización tecnológica,
                    gestión ambiental y software a la medida del cliente, encaminados hacia el desarrollo sostenible</p>       
                   
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Empezar!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Te podemos asesorar en:</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row contenedor-asesorar">
              <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="https://firebasestorage.googleapis.com/v0/b/genrencia-56a55.appspot.com/o/plan%20ordenamiento.png?alt=media&token=5a24127e-125b-40ba-b159-974f4c0e1779" alt="Plan de Ordenamiento Territorial" width="333" height="180">
                          <div>
                              <h3>Planes De Ordenamiento Territorial</h3>                        
                          </div>
                       </div>            
                 
                </div>
               
    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/consultoria.png" alt="Consultoría Ambiental" width="333" height="180">
                          <div>
                             <h3>Consultoría Ambiental</h3>                      
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-11.png" alt="Responsabilidad Social Corporativa" width="333" height="180">
                          <div>
                               <h3>Responsabilidad Social Corporativa</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-10.png" alt="Estudio de Impacto Ambiental" width="333" height="180">
                          <div>
                          <h3>Estudio de Impacto Ambiental</h3>                       
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-09.png" alt="Plan de Ordenamiento Territorial" width="333" height="180">
                          <div>
                                <h3>Monitoreo de Emisiones</h3>                     
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-08.png" alt="Auditorías Ambientales" width="333" height="180">
                          <div>
                               <h3>Auditorías Ambientales</h3>                       
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-07.png" alt="Sistemas de Gestión" width="333" height="180">
                          <div>
                              <h3>Sistemas de Gestión</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-05.png" alt="Gestión de Residuos" width="333" height="180">
                          <div>
                              <h3>Gestión de Residuos</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-04.png" alt="Análisis de Ciclo de Vida" width="333" height="180">
                          <div>
                        <h3>Análisis de Ciclo de Vida</h3>                       
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-02.png" alt="Permisos Ambientales" width="333" height="180">
                          <div>
                             <h3>Permisos Ambientales</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-06.png" alt="Monitoreo de Vertimientos" width="333" height="180">
                          <div>
                           <h3>Monitoreo de Vertimientos</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-03.png" alt="Capacitaciones Ambientales" width="333" height="180">
                          <div>
                                   <h3>Capacitaciones Ambientales</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-03.png" alt="Plan de Ordenamiento Territorial" width="333" height="180">
                          <div>
                              <h3>Capacitaciones Educación Basica</h3>                       
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://visionsostenible.com.co/wp-content/uploads/2016/04/botones-03.png" alt="Plan de Ordenamiento Territorial" width="333" height="180">
                          <div>
                              <h3>Capacitaciones TIC.</h3>                        
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://www.rhiss.net/system/vista/img/iconThumb01.png"  alt="Aplicaciones Web" >
                          <div>
                            <h3>Aplicaciones Web</h3>                         
                          </div>
                       </div>            
                 
                </div>
                    <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://www.rhiss.net/system/vista/img/iconThumb03.png" alt="Aplicaciones Móviles">
                          <div>
                                <h3>Aplicaciones Móviles</h3>                     
                          </div>
                       </div>            
                 
                </div>
                 <div class="col-lg-4 col-md-6 text-center" >                  
                
                      <div class="thumbnail" >
                         <img  class="img-circle" src="http://www.rhiss.net/system/vista/img/iconThumb02.png" alt="Diseño de Páginas Web" >
                          <div>
                             <h3>Diseño de Páginas Web</h3>                         
                          </div>
                       </div>            
                 
                </div>
            </div>
        </div>
    </section>
<h1 class="page-header"></h1>
    <section class="no-padding" id="portfolio">

        
        <div class="container-fluid" style="position:relative;left:2%;">
            <div class="row no-gutter popup-gallery">
             <div class="col-lg-3 col-md-6 text-center">  
                   <p align="center"><a href="img/giovanni.png" class="portfolio-box">
                        <img src="img/giovanni.png"  class="img-responsive img-circle" alt="">                        
                    </a></p>
                      <h3>Giovanni Ernesto Rodriguez Diaz
                    <small>Ingeniero Ambiental</small>
                </h3>
                <p>Gerente general</p>
             </div>                
                 
            <div class="col-lg-3 col-md-6 text-center">  
                   <p align="center"><a href="img/giovanni.png" class="portfolio-box">
                        <img src="img/giovanni.png"  class="img-responsive img-circle" alt="">                        
                    </a></p>
                      <h3>Constanza Becerra Tamayo
                    <small>Ingeniera Ambiental</small>
                </h3>
                <p>Gerente y/o directora en gestión de proyectos</p>
             </div>  

             <div class="col-lg-3 col-md-6 text-center">  
                   <p align="center"><a href="img/giovanni.png" class="portfolio-box">
                        <img src="img/giovanni.png"  class="img-responsive img-circle" alt="">                        
                    </a></p>
                      <h3>Robinson Laurel Rodriguez Diaz
                    <small>Ingeniero Industrial</small>
                </h3>
                <p>Gestor e interventor de proyecto</p>
             </div>  

            <div class="col-lg-3 col-md-6 text-center">  
                   <p align="center"><a href="img/giovanni.png" class="portfolio-box">
                        <img src="img/giovanni.png"  class="img-responsive img-circle" alt="">                        
                    </a></p>
                      <h3>Juan Camilo Rodriguez Diaz
                    <small>Ingeniero De Sistemas y Computación</small>
                </h3>
                <p>Consultor, administrador y gestor de proyectos informáticos</p>
             </div>  
            </div>
        </div>
    </section>

   

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <hr class="primary">
                    <p>Si desea información adicional sobre nuestros servicios por favor diligencie el siguiente formulario o puede comunicarse directamente con nuestra oficina.</p>
                </div>
                <div class="row">
      
               <div class="col-md-6 col-md-offset-1">
                  
                    <div id="alertas" style="display:none;">
                          
                    </div>
                              
                    <form method="POST" name="fContacto" id="fContacto" class="formulario" action="{{ route('user.store') }}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"></input>
                        <div class="col-md-6">
                            <label>Nombre*</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label>Teléfono*</label>
                            <input type="text" name="phone" id="name" class="form-control"/>
                        </div>
                         <div class="col-md-12">
                            <label>Correo electrónico*</label>
                            <input type="text" name="email" id="name" class="form-control"/>
                        </div>                         
                        <div class="col-md-12">
                        <label>Dudas / Inquietudes *</label>
                        <textarea maxlength="5000" rows="10" class="form-control" name="question" id="message"></textarea>
                        </div>
                        <div class="col-md-6 btn-toolbar">                    
                           <button id="submit-email" class="btn btn-primary">Enviar Formulario</button>
                        </div>
                    </form>
                    </div>
                <div class="col-md-5">

                 <ul class="list-unstyled">
                    <li> <a href="#"><span class="glyphicon glyphicon-map-marker"></span>
                        </a> <strong>Dirección:</strong>Yopal-Casanare Calle 15 No.18-13 Oficina 220
                    </li>
                    <li> <a href="#"><span class="glyphicon glyphicon-phone"></span>
                        </a> <strong>Movil:</strong>+57 311 5208693
                    </li>
                       <li> <a href="#"><span class="glyphicon glyphicon-phone"></span>
                        </a> <strong>Movil:</strong>+57 311 2399429
                    </li>
                       <li> <a href="#"><span class="glyphicon glyphicon-phone"></span>
                        </a> <strong>Movil:</strong>+57 313 2657947
                    </li>
                       <li> <a href="#"><span class="glyphicon glyphicon-phone"></span>
                        </a> <strong>Movil:</strong>+57 311 5907753
                    </li>
                       <li> <a href="#"><span class="glyphicon glyphicon-phone"></span>
                        </a> <strong>Movil:</strong>+57 315 6021583
                   <li><a href="#">
                      <span class="glyphicon glyphicon-envelope"></span>
                    </a> <strong>E-mail:</strong> <a>essotec.ing@gmail.com</a>
                    </li>
             


                 </ul>
                   
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
  <script src="js/base.js"></script>
<a href="#" class="scrollup">Scroll</a>

</body>

</html>
