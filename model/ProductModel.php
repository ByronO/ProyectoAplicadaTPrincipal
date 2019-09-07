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
        $consult = $this->db->prepare('call sp_registerProduct(?, ?, ?, ?)');
        $consult->bindParam("1", $name, PDO::PARAM_STR, 50);
        $consult->bindParam("2", $price, PDO::PARAM_INT, 5);
        $consult->bindParam("3", $description, PDO::PARAM_STR, 200);
        $consult->bindParam("4", $path, PDO::PARAM_STR, 200);

        $consult->execute();
        $consult->CloseCursor();

    }

    public function updateProduct($id, $name, $price, $description)
    {
        $consult = $this->db->prepare('call sp_updateProduct(?, ?, ?, ?)');
        $consult->bindParam("1", $id, PDO::PARAM_INT, 5);
        $consult->bindParam("2", $name, PDO::PARAM_STR, 50);
        $consult->bindParam("3", $price, PDO::PARAM_INT, 5);
        $consult->bindParam("4", $description, PDO::PARAM_STR, 200);

        $consult->execute();
        $consult->CloseCursor();

    }

    public function deleteProduct($id)
    {
        $consult = $this->db->prepare('call sp_deleteProduct(?)');
        $consult->bindParam("1", $id, PDO::PARAM_INT, 5);

        $consult->execute();
        $consult->CloseCursor();

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

    public function addProductCart($name, $price, $image, $description, $cant, $provider, $user)
    {
        $db = pg_connect( "user=postgres password=1234 host=localhost dbname=Principal") or die( "Error al conectar: ".pg_last_error() );

        $sql = "SELECT * FROM addproductcart('$name', $price, '$image', '$description', $cant, $provider, $user)";

        $result =  pg_query( $db, $sql );

    }

}
