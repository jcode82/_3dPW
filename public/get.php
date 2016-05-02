<?php

    require("../includes/config.php");
  
	$octopi = 'http://octopi.local/api/printer?exclude=history,sd&limit=2';
	$key = '&apikey=7C99F5357B0249DBA086A1422344AAB6';

	$octopi .= $key;
	//echo ($octopi);
	$state = file_get_contents($octopi);

	$printer = (json_decode($state,true));

	$_SESSION['id'] = 1;
	$_SESSION['printer_state'] = $printer;
 
    render("portfolio.php",["title" => "My Printer State"]);

?>