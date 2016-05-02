<?php

    require("../includes/config.php");
  
    $octopi = 'http://octopi.local/api/job?exclude=history,sd&limit=2';
    $key = '&apikey=7C99F5357B0249DBA086A1422344AAB6';

    $octopi .= $key;
    //echo ($octopi);
    $jobarray = file_get_contents($octopi);

    $jobarrays = (json_decode($jobarray,true));

    $_SESSION['id'] = 1;
    $_SESSION['job'] = $jobarrays;
 
    render("job_form.php",["title" => "My Job State"]);

?>