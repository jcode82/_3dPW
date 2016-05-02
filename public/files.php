<?php

    require("../includes/config.php");
  
    $octopi = 'http://octopi.local/api/files?exclude=history,sd&limit=2';
    $key = '&apikey=7C99F5357B0249DBA086A1422344AAB6';

    $octopi .= $key;
    //echo ($octopi);
    $filesarray = file_get_contents($octopi);

    $filesarrays = (json_decode($filesarray,true));

    $_SESSION['id'] = 1;
    $_SESSION['files'] = $filesarrays;
 
    render("files_form.php",["title" => "My Files"]);

?>