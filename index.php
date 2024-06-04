<?php
require('Controller/VoteController.php');
try {
   
    
   if (isset($_GET['page'])) {
       switch ($_GET['page']) {
           case 'vote':
           //si page vote selectionee
           $voteController = new VoteController();
           $voteController->votePublic();
           
            break;
        
            
               

           default;
       }
}
        

} catch (Exception $e) {
   $error = $e-> getMessage();
   
   require("view/error.view.php");
}