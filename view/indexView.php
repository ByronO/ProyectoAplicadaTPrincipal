<?php
include_once 'public/header.php';
include_once 'public/navH.php';
?>

<CENTER>
    <h2 style="margin-top: 30px; margin-bottom: 30px">Inicio de sesión</h2>
    <div content="width=device-widt" id="form" class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form method="post" action="?controlador=User&accion=session">
                <input type="text" style="width: 100%; margin-bottom: 15px;" class="form-control" id="user"
                       name="user"
                       placeholder="Nombre de usuario" required/>
                <input type="password" style="width: 100%; margin-bottom: 15px;" class="form-control" id="pass"
                       name="pass"
                       placeholder="Contraseña"
                       required/>

                <button id="ingresar" class="btn btn-success" type="submit">Ingresar</button>
                <br><br>
                <h5>Si no posee una cuenta registrese <a style="color: blue"
                                                         href="?controlador=User&accion=registerView">aqui.</a></h5>
            </form>
        </div>
        <div class="col-sm-4"></div>
        <br>

    </div>

</CENTER>






