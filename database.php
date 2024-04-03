<?php
$db_server = "localhost"; 
$db_user = "root";
$db_pass = "";
$db_name = "e-service";
$conn = null; 
try {
   
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if (!$conn) {
        
        throw new Exception("Impossible de se connecter à la base de données");
    }
    else{
   
    }
} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
