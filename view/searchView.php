<!-- Navigation -->
<?php
include_once 'public/header.php';
include_once 'public/navbar.php';

?>
<!-- Page Content -->
<div class="container">

    <br>
    <center>
        <div class="col-md-4">
            <form  method ="post" action="?controlador=Product&accion=searchProduct">
                <label for="search"> <h3>Búsqueda</h3></label>
                <input id="search" name="search" class="inputname form-control" type="text" required/>
                <br>
                <button id="search_btn" class="btn btn-success" type="submit" >Buscar</button>
            </form>
        </div>
    </center>

    <?php
            if(!$vars['search'] == NULL){
        ?>
        <center>
            <br>
            <h1 style="color:red" class="my-6">Resultados de tu búsqueda</h1>
            <br>
        </center>
        <?php
           }
        ?>
    <div class="col-md-12 row" >
        <?php
            if(!$vars['search'] == NULL)
            foreach ($vars['search'] as $pro) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $pro['name'] ?></h4>
                        </div>
                        <img class="card-img-top" src="<?php echo $pro['image'] ?>" alt="">
                        <div class="card-footer">
                            <input type="button" class="btn btn-primary" value="CRC <?php echo $pro['price'] ?>" onclick="productView(<?php echo $pro['id'] ?>);return false;">
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
        <br>
    </div>

    <?php
        if($vars['search'] == NULL){
    ?>
        <center>
            <br>
            <h1 style="color:red" class="my-6">No se encontraron resultados</h1>
            <br>  <br>
        </center>
    <?php
        }
    ?>
</div>
<!-- /.container -->
<?php
include_once 'public/footer.php';


?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

