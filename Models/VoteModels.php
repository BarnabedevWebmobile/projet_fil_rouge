
<?php
class VoteManager{
    //heritage connexion database enfant
    public function getVotes(){
       $apprenant = [
                      ['nom' => 'Christophe'],
                      ['nom' => 'cyril'],
                      ['nom' => 'killian'],
                      ['nom' => 'martin'],
                      ['nom' => 'melvyn'],
                      ['nom' => 'Noé'],
                      ['nom' => 'stéphane'],
                      ['nom' => 'vincent'],
                      ['nom' => 'agustin'],
                      ['nom' => 'allyson'],
                      ['nom' => 'annaelle'],
                      ['nom' => 'barnabé']
       ];

      $formateur =  [
                    ['nom' => 'laeticia'],
                    ['nom' => 'Christophe'],
                    ['nom' => 'luc'],
                    ['nom' => 'cédric'],
                    ['nom' => 'tony']
      ];
                    
      $categorie = [
                      ['nom' => 'Le radieux', 'type'=> 'apprenants'],
                      ['nom' => 'L/ami de tous' ,'type'=> 'apprenants'],
                      ['nom' => 'Le fêtard', 'type'=> 'apprenants'],
                      ['nom' => 'Le titan de travail' ,'type'=> 'apprenants'],
                      ['nom' => 'Le designeur','type'=> 'apprenants'],
                      ['nom' => 'Le codeur émérite' ,'type'=> 'apprenants'],
                      ['nom' => 'la Fusée de l/animation', 'type'=> 'apprenants'],
                      ['nom' => 'Le râleur ou grincheux' ,'type'=> 'apprenants'],
                      ['nom' => 'Le defenseur de la patience' ,'type'=> 'formateur'],
                      ['nom' => 'Le comique magistral','type'=> 'formateur'],
                      ['nom' => 'L/étourdi' ,'type'=> 'formateur']

      ];
      
      $complet = array($apprenant,$formateur,$categorie);
    
    return $complet;
    }
    
}