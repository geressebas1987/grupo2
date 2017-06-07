<!DOCTYPE html>
<html class="background">
    <head>
        <title>Gauchada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap & Bootstrap Validator CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrapValidator.min.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">

    </head>
    <body>
        <div class="container">
            <!-- Trigger the modal with a button 
            <button id="openModal" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Gauchada</button>-->
            <!-- Modal -->
            <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                            <h4 class="glory"><span class="glyphicon glyphicon-link"></span> Gauchada</h4>
                        </div>
                        <div class="modal-body bg-body">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <form id="gauchada" method="POST" action="credito.php" enctype="multipart/form-data">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>nombre  </label>
                                                            <input id="title" type="text" name="nombre" class="form-control" placeholder="Por favor, escriba el nombre de usuario*" required="required">

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>apellido  </label>
                                                            <input id="title" type="text" name="apellido" class="form-control" placeholder="Por favor, escriba el apellido*" required="required">

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>DNI  </label>
                                                            <input id="title" type="number" name="dni"  minlentgH="8"  maxlentgh="8" class="form-control" placeholder="Por favor, ingrese su numero de DNI *" required="required">

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>numero de tarjeta  </label>
                                                            <input id="title" type="text" name="tarjeta" class="form-control" placeholder="Por favor, ingrese el numero de tarjeta *" minlength="15" maxlength="16"  required="required">

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>clave de  tarjeta  </label>
                                                            <input id="title" type="password" name="clave" class="form-control" placeholder="Por favor,ingrese la clave de tarjeta*" required="required" minlength="4" maxlength="6">

                                                           

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>Fecha de vencimiento   </label>
                                                            <input id="title" type="date" name="fecha" class="form-control" placeholder="Por favor, ingrese la fecha de vencimiento *" required="required">

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>Entidad  </label>
                                                            <input id="title" type="text" name="entidad" class="form-control" placeholder="Por favor,ingrese la entidad a la que pertenece *" required="required">

                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>Nombre de tarjeta  </label></br>
                                                            

                                                            <select>
                                                                <option value="VISA" >VISA</option>
                                                
                                                               <option value="MASTERCARD" >MASTERCARD</option>
                                                               <option value="AMERICANEXPRESS" >AMERICAN EXPRESS</option>
                                                            </select>
                                                            </br></br>


                                                            <label class="control-label" for="title"><span class="glyphicon glyphicon-thumbs-up"></span>Comprar cantidad de credito</label>
                                                            <input id="title" type="number" name="credito" class="form-control" placeholder="Por favor, ingrese la cantidad de credito a comprar *" required="required">

                                                             <div class="col-md-3 col-md-offset-2">
                                                    <button type="submit" class="btn btn-success btn-send btn-block" form="gauchada" value="Submit"><span class="glyphicon glyphicon-ok"></span> Confirmar</button>
                                                    <!-- <input type="submit" class="btn btn-success btn-send" value="Crear Gauchada"> -->
                                                </div>



                                                    </div>
                                                </div>
                                            </div>

                                            
                                           

                                            

                                           
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

        <!-- JQuery & Bootstrap Validator JS-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrapValidator.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/validate.js"></script>

    </body>