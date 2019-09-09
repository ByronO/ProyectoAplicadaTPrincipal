<?php
include_once 'public/header.php';
include_once 'public/navbar.php';

?>

<center><h2 style="margin-bottom: 30px; margin-top: 30px">Lista de articulos</h2></center>
<div class="contenedor">
    <div id="principal" class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div id="contenido" class="container-fluid text-center table-responsive col-sm-10"
                 style="border:1px solid green;">

                <table id="data_table" class="table table-striped container-fluid" style="width: 100%">
                    <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($vars['products'] as $pro) {
                        $id = $pro['id'] ?>
                        <form method="post" action="?controlador=Product&accion=deleteProductCart">
                            <tr id="fila<?php echo $id ?>" style="width: auto">
                                <td><img src="<?php echo $pro['image'] ?>" width="50" height="50"></td>
                                <td><input id="name" name="name"
                                           type="text" class="form-control"
                                           style="width: 100%; cursor: auto;"
                                           value="<?php echo $pro['name'] ?>" disabled></td>
                                <td><input id="nombre" name="nombre" type="text" class="form-control"
                                           style="width: 100%; cursor: auto;" value="<?php echo $pro['price'] ?> "
                                           disabled></td>
                                <td><input id="des" name="des" type="text" class="form-control"
                                           style="width: 100%; cursor: auto;" value="<?php echo $pro['description'] ?> "
                                           disabled></td>
                                <td><input id="cant" name="cant" type="text" class="form-control"
                                           style="width: 100%; cursor: auto;" value="<?php echo $pro['cant'] ?> "
                                           disabled></td>
                                <input type="hidden" name="id" id="id" value="<?php echo $pro['id'] ?>">
                                <td><input type="submit" class="btn btn-danger" value="Eliminar">
                                <td>
                            </tr>
                        </form>
                    <?php }
                    ?>
                    </tbody>
                </table>


                <CENTER>
                    <div style="margin-top: 100px">
                        <h2 style="margin-bottom: 30px; margin-top: 30px">Total a pagar</h2>
                        <h3><?php echo $vars['total'] ?></h3>
                    </div>
                    <br>
                </CENTER>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</div>

<br><br><br>
<center><h2 style="margin-top: 30px; margin-bottom: 30px">Formulario de pago</h2></center>
<br><br><br>

<script type="text/javascript" src="public/js/pago.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/pago.css">
<div style="width: 60%" class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="container-fluid col-sm-5">
            <div class="containerr" id="pago" style="margin-top: 100px">
                <div class="col1">
                    <div class="card" style="background-color: rgba(0,0,0,0.5)">
                        <div class="front">
                            <div class="type">
                                <img class="bankid"/>
                            </div>
                            <span class="chip"></span>
                            <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
                            <div class="date"><span class="date_value">MM / YYYY</span></div>
                            <span class="fullname">NOMBRE COMPLETO</span>
                        </div>
                        <div class="back">
                            <div class="magnetic"></div>
                            <div class="bar"></div>
                            <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <label>Número de tarjeta</label>
                    <input id="numeroT" name="numeroT" class="number form-control" type="text" ng-model="ncard"
                           maxlength="19"
                           onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                    <label>Nombre del tarjetahabiente</label>
                    <input id="nombreT" name="nombreT" class="inputname form-control" type="text" maxlength="16"
                           placeholder=""/>
                    <label>Fecha de vencimiento </label>
                    <input id="fechaT" name="fechaT" class="expire form-control" type="text"
                           placeholder="MM / YYYY"/>
                    <label>Número de seguridad</label>
                    <input id="numeroS" name="numeroS" class="ccv form-control" type="text" placeholder="CVC"
                           maxlength="3"
                           onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                    <form method="post" action="?controlador=Product&accion=confirmBuyCart">
                        <input type="submit" class="btn btn-success" value="Confirmar Compra">
                    </form>

                    <br><span id="mensajeC" style="color: red"></span>
                </div>

            </div>

        </div>

        <div class="col-sm-2"></div>
    </div>
    <div style="margin-top: 100px"></div>
</div>
<br><br><br><br><br><br>



