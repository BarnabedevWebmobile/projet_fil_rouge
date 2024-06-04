<!-- Localisation objet PDO -->

<?php 

    class Manager{

        protected function connexion(){
            // PDO reqest
            try {
                $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
                return $db;
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
        }
    }