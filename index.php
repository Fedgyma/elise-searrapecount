

<?php
$debug = "debug";

$serveur ="192.198.0.7";


$login = "rasppsql";

$pass = "!Blabla22!";

$dbname= "raped";

try{
$db = new PDO("pgsql:host=$serveur;dbname=$dbname", $login, $pass);
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $error){
	echo 'Échec de la connexion: ' .$error->getMessage();
}

// EXEMPLE MYSQLI: $con = mysqli_connect('localhost','peter','abc123','my_db');

// $con = mysqli_connect($serveur,$login,$pass,$dbname);
// var_dump($con);
?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  </head>
  <body>
    <button onclick="raped()"/>raped</button>
    <p id="rapeCount"></p>
    <script type="text/javascript">
    var a = 0;
    function raped(){
          var raped = document.getElementById("rapeCount");
          raped.value = a;
          a++;
          document.getElementById("rapeCount").innerHTML = a
      }
    </script>
    <!-- <div id="rep"></div> -->
  </body>
</html>
