<?php

require ('controller/LoginController.php');
require ('controller/ResultController.php');
require ('controller/VoteController.php');


    try{

        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'login':
                    # code...
                    break;
                case 'vote':
                    # code...
                    break;
                case 'result':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }

    }catch( Exception $e){
        $error = $e->getMessage();
        require 'view/error.view.php';
    }