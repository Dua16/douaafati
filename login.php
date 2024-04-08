<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "database.php"; // Assurez-vous que ce fichier contient les informations de connexion correctes

    if ($conn === false) {
        die("Erreur de connexion : Impossible de se connecter à la base de données");
    }
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result !== false) {
        if (mysqli_num_rows($result) == 1) {
            header("Location: home.php");
            exit(); 
        } else {
            echo "Identifiants incorrects. Veuillez réessayer.";
        }
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
