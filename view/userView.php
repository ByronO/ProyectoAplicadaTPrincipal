<!-- Navigation -->
<?php
include_once 'public/header.php';
include_once 'public/navbar.php';

?>
<!-- Page Content -->
<div class="container">


    <h1 class="my-4">Sugerencias para ti!</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Sugerencia 1</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Sugerencia 2</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos,
                        nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque
                        exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Sugerencia 3</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <h1 class="my-4">Todos nuestros productos</h1>
    <div class="row">
        <?php
        foreach ($vars['products'] as $pro) {
            ?>

            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $pro['name'] ?></h4>
                        </div>
                        <img class="card-img-top" src="<?php echo $pro['image'] ?>" alt="">
                        <div class="card-footer">
                            <input type="button" class="btn btn-primary" value="CRC <?php echo $pro['price'] ?>"
                                   onclick="productView(<?php echo $pro['id'] ?>);return false;">
                        </div>
                    </div>
            </div>

            <?php
        }
        ?>
    </div>
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
