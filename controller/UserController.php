<?php

require 'model/ProductModel.php';
require 'model/UserModel.php';

session_start();

class UserController
{

    public function __construct()
    {
        $this->view = new View();
    }


    public function homeAdmin()
    {
        //llamar al modelo para traer datos

        $product = new ProductModel();

        $data['products'] = $product->getProducts();

        $this->view->show('adminView.php', $data);
    }


    public function sessionView()
    {
        $this->view->show('indexView.php', NULL);

    }

    public function registerView()
    {
        $this->view->show('registerView.php', NULL);

    }

    public function register()
    {
        $userModel = new UserModel();
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $result = $userModel->register($user, $pass);

        if ($result[0]['registeruser'] == 1) {


            $this->view->show('registerView.php', NULL);
            echo '<script> alert("Este usuario ya existe")</script>';

        } else {
            $this->view->show('indexView.php', NULL);

        }

    }

    public function session()
    {
        if(isset($_SESSION['idUser'])) {
            unset($_SESSION['idUser']);
        }
        $userModel = new UserModel();
        $productModel = new ProductModel();
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($user == 'admin' && $pass == 'admin123') {
            $data['products'] = $productModel->getProducts();

            $this->view->show('adminView.php', $data);

        }else{
            $result = $userModel->session($user, $pass);

            if ($result[0]['verifyuser'] != 0) {

                $_SESSION['idUser'] = $result[0]['verifyuser'];
                $data['products'] = $productModel->getProducts();

                $random = $productModel->getRandomSearch($_SESSION['idUser']);
                if($random!=NULL){
                    $data['suggestions'] = $productModel->getSuggestions($random[0]['search']);
                }else{
                    $data['suggestions']=null;
                }

                $this->view->show('userView.php', $data);
            } else {
                $this->view->show('indexView.php', NULL);

            }

        }

    }

}