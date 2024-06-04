<?php
require("Models/VoteModels.php");
class VoteController{
    public function votePublic(){
        $voteManager = new VoteManager();
        $request = $voteManager->getVotes();
        require("Views/VoteViews.php");

    }
}