<!-- Navigation -->
<?php
include_once 'public/header.php';
include_once 'public/navbar.php';


?>

<!-- Page Content -->
<div class="container">
    <?php
    foreach ($_SESSION['product'] as $pro) {
        if($pro['provider'] == 0){
            $pro['provider'] = 'NOMBRE DE LA TIENDA';
        } else if($pro['provider'] == 1){
            $pro['provider'] = 'Audio World';
        } else if($pro['provider'] == 2){
            $pro['provider'] = 'PC MANIA CR';
        } else if($pro['provider'] == 1){
            $pro['provider'] = 'MoniStore';
        }
        ?>
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"><?php echo $pro['name'] ?>
        </h1>


        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="<?php echo $pro['image'] ?>" alt="">
            </div>


            <div class="col-md-4">
                <h3 class="my-3">Descripción</h3>
                <p><?php echo $pro['description'] ?></p>
                <h3 class="my-3">Detalles del producto</h3>
                <ul>
                    <li>Precio: CRC <?php echo $pro['price'] ?></li>
                    <li>Proveedor: <?php echo $pro['provider'] ?></li>
                </ul>

                <form method="post" action="?controlador=Product&accion=buyView">
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-sm-3" style="margin-right: 0px">
                        <label style="margin-top: 5px" >Cantidad</label>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" name="cant" id="cant" min="1" value="1">
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6" style="margin-right: 0px">

                            <button type="submit" class="btn btn-success">Comprar ahora</button>

                    </div>
                    <div class="col-sm-6">
                            <input type="button" class="btn btn-primary" value="Agregar al carrito"
                                   onclick="addCart(<?php echo $pro['id'] ?>);return false;">
                    </div>
                </div>
                </form>
            </div>

        </div>
        <br><br>

        <?php
    }
    ?>
</div>

<?php
include_once 'public/footer.php';


?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
