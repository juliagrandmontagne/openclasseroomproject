<?php

function directionchapitre()
    {
        require('Model/front-end/chapitre.php');
        $instanceclasse = new mChapitre();
        $nbrtwo = $instanceclasse-> lafonction();
require('view/front-end/Chapitre.php');
    }

?>