<!DOCTYPE html>
<html lang="en">

<head>
     <meta name="viewport">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Editar datos</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/main.css" rel="stylesheet">
</head>

<body>
<!--menu-->
<?php include'inc/menu_expo.php'; ?>

<div class="container Geditardatos">
    <div class="resume">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4 animate">
                                    <figure>
                                     <a class="thumbnail doc-img animate attachment-gallery-post-single wp-post-image Geditarimagen" href="#">  <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300"> </a>
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <form role="form" style="width:400px; margin: 0 auto;">
        <h1 id="Geditartitulo">EDITAR DATOS</h1>
        
        <label for="" class="Geditartitulos">Nombre:</label>
        <div class="required-field-block Geditarinputs">
            <input type="text" placeholder="Nombre" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        <label for="" class="Geditartitulos">Apellido:</label>
        <div class="required-field-block Geditarinputs">
            <input type="text" placeholder="Apellido" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        <label for="" class="Geditartitulos">Usuario:</label>
        <div class="required-field-block Geditarinputs">
            <input type="text" placeholder="Usuario" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        <label for="" class="Geditartitulos">Contraseña:</label>
        <div class="required-field-block Geditarinputs">
            <input type="text" placeholder="Contraseña" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        <label for="" class="Geditartitulos">Confirmar contraseña:</label>
        <div class="required-field-block">
            <input type="text" placeholder="Confirmar contraseña" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
             <label for="" class="Geditartitulos">Fecha de nacimiento:</label>
        </div>
          <div class="required-field-block">
            <input type="text" placeholder="AA/MM/DD" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>

             <label for="" class="Geditartitulos">Correo:</label>
        </div>
        <div class="required-field-block">
            <input type="text" placeholder="Correo@ejemplo.com" class="form-control">
                <div class="required-icon">
                    <div class="text">*</div>
                </div>
        </div>


        <!--radio buton-->
        <label for="" class="Geditartitulos">Genero:</label><br><br>
        <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <input type="radio" class="" name="reg_gender" id="masculino" placeholder="username">
            <label for="masculino">Masculino</label>
        </div>
        <div class="col-lg-3"></div>
         <div class="col-lg-3">
            <input type="radio" class="" name="reg_gender" id="femenino" placeholder="username">
        <label for="femenino">Femenino</label>
        </div>
         
                   


                    <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-5">
                    <button class="btn btn-primary ladda-button Geditarestilo" data-style="expand-right">
                        <span class="ladda-label"> Actualizar datos </span>
                    </button>
                    </div>
                    </div>



    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



















  <?php include 'inc/java.php'; ?>
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
