<?php
include_once 'public/header.php';
include_once 'public/navbar.php';

$id = 0;
?>
<center><h2 style="margin-top: 30px; margin-bottom: 30px">Lista de articulos</h2></center>
<div class="contenedor">
    <div id="principal" class="container-fluid">
        <div class="row">
            <div id="contenido" class="container-fluid text-center table-responsive col-sm-12"
                 style="border:1px solid dodgerblue;">
                <form method="post" action="?controlador=Cliente&accion=cofirmarCompra">
                    <table id="data_table" class="table table-striped container-fluid" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($_SESSION['product'] as $pro) {
                            $id = $pro['id'] ?>
                            <tr style="width: auto">
                                <td><img src="<?php echo $pro['image'] ?>" width="50" height="50"></td>
                                <td><input id="<?php echo $pro['id'] ?>" name="<?php echo $pro['id'] ?>"
                                           type="text" class="form-control"
                                           style="width: 100%; cursor: auto;"
                                           value="<?php echo $pro['name'] ?>" disabled></td>
                                <td><input id="nombre" name="nombre" type="text" class="form-control"
                                           style="width: 100%; cursor: auto;" value="<?php echo $pro['price'] ?> "
                                           disabled></td>
                                <td><input id="deas" name="des" type="text" class="form-control"
                                           style="width: 100%; cursor: auto;" value="<?php echo $pro['description'] ?> "
                                           disabled></td>
                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                </form>

                <CENTER>
                    <div style="margin-top: 50px; margin-bottom: 50px">
                        <h2 style="margin-top: 30px; margin-bottom: 30px">Total a pagar</h2>
                            <h3>CRC <?php echo $pro['price']*$vars?></h3>

                    </div>
                </CENTER>

            </div>
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

                    <input type="button" class="btn btn-success" value="Confirmar Compra"
                           onclick="confirmBuy();return false;">


                    <br><span id="mensajeC" style="color: red"></span>
                </div>

            </div>

        </div>

        <div class="col-sm-2"></div>
    </div>
    <div style="margin-top: 100px"></div>
</div>
<br><br><br><br><br><br>


