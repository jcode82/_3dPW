<?php

    require("../includes/config.php");
  
    /* Redirect browser */
    header("Location: http://octopi.local/");
     
    /* Make sure that code below does not get executed when we redirect. */
    exit;

?>