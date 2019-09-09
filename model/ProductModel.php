<?php
/**
 * Created by PhpStorm.
 * User: Byron Ortiz Rojas
 * Date: 5/25/2019
 * Time: 11:09 p.m.
 */

class ProductModel
{

    protected $db;

    public function __construct()
    {


        /*require 'libs/SPDO.php';

        $this->db = SPDO::singleton();*/

    }//constructor

    /*FUNCION QUE ENVIA LOS DATOS OBTENIDOS EN EL CONTROLLER AL PROCEDIMIENTO ALMACENADO
QUE CORRESPONDE*/
    public function registerProduct($name, $price, $description, $path)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  registerProduct('$name', $price, '$path', 1, '$description', 0)";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);

        return $arr;

    }

    public function updateProduct($name, $price, $description)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  updateProduct('$name', $price, '$description', 0)";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);


    }

    public function deleteProduct($name)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  deleteProduct('$name', 0)";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);

    }

    public function getProductsPrincipal()
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = 'SELECT * FROM  getProducts(0)';

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);

        return $arr;
    }

    public function getProducts()
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = 'SELECT * FROM  getAllProducts()';

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);

        return $arr;
    }

    public function getProduct($id)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  getProduct($id)";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);

        return $arr;
    }

    public function getProductCart($id)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  getProductCart($id)";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);

        return $arr;
    }

    public function addProductCart($name, $price, $image, $description, $cant, $provider, $user)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM addproductcart('$name', $price, '$image', '$description', $cant, $provider, $user)";

        $result =  pg_query( $db, $sql );

    }

    public function deleteProductCart($id, $user)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM deleteProductCart($id, $user)";

        $result =  pg_query( $db, $sql );

    }

    public function confirmBuyCart($user)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM confirmBuyCart($user)";

        $result =  pg_query( $db, $sql );

    }

    public function searchProduct($search)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  searchProduct('$search')";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);


        return $arr;
    }

    public function registerSearch($user,$search){
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  registerSearch($user,'$search')";

        pg_query( $db, $sql );
    }

    public function getRandomSearch($user){

        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  getRandomSearch($user)";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);


        return $arr;
    }

    public function getSuggestions($search){

        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM  getSuggestions('$search')";

        $result =  pg_query( $db, $sql );
        $arr = pg_fetch_all($result);


        return $arr;
    }

}
