<?php

?>

<!doctype html>
<html>

<head>
   <meta charset="utf-8">

</head>

<body>






   
      <?php
      include('');
      global $current_user;

        $serverName = "";
$connectionInfo = array( "Database"=>"",
                         "UID"=>"",
                         "PWD"=>"",
                         "Encrypt"=>true,
                         "TrustServerCertificate"=>true,
                         "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if($conn){
   // echo "success";
}
else{
    echo "fail";
}
	   $kisi_ad = $current_user->display_name;

      $sql = "SELECT * FROM ;

      global $stmt;
      $stmt = sqlsrv_query($conn, $sql);
      $say = 0;
      $count = 0;




      $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);



      $user_enter= $current_user->display_name;
      $department = $row[''] ?? '';
	if($department!="" or $user_enter=="admin"){
		
		echo "Note:";
		?>
	<br>
		<?php
		
		
		
	}
    else {
		echo "no access";
		?>
	<br>
	<?php
		echo "no right to access";
	}
	  
		    





      ?>
     
     


   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">




</body>

</html>