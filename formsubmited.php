<?php

include_once 'database/connect.php';

$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$pnom = mysqli_real_escape_string($conn, $_POST['pnom']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$hotel = mysqli_real_escape_string($conn, $_POST['hotel']);
$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
$pays = mysqli_real_escape_string($conn, $_POST['pays']);
$nbc = mysqli_real_escape_string($conn, $_POST['nbc']);
$cs = mysqli_real_escape_string($conn, $_POST['cs']);
$cd = mysqli_real_escape_string($conn, $_POST['cd']);
$ct = mysqli_real_escape_string($conn, $_POST['ct']);

if (empty($nom) || empty($pnom) || empty($email) || empty($hotel) ||  
        empty($adresse) || empty($pays)
            || empty($nbc) || empty($cs) || empty($cd) || empty($ct)) {
    header("Location: owner.php?signup=erroremptyfields"); 
    } else if (!preg_match("/^[a-zA-Z ]*$/",$nom) || !preg_match("/^[a-zA-Z ]*$/",$pnom) || !preg_match("/^[a-zA-Z0-9 ]*$/",$hotel)
                || !preg_match("/^[a-zA-Z]*$/",$pays)) {
                    header("Location: owner.php?signup=errorunrealisticinput"); 
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
            header("Location: owner.php?signup=errorfalsemail");
            } else if (!is_numeric($nbc) || !is_numeric($cs) || !is_numeric($cd) || !is_numeric($ct)) {
                header("Location: owner.php?signup=errorisnan");
            } else {

                $sql = "INSERT INTO Hotels (Nom,Prenom,Email,Hotel,Adresse,Pays,n_chambre,csimple, cdouble, ctriple) 
                VALUES ('$nom','$pnom','$email','$hotel','$adresse','$pays','$nbc','$cs','$cd','$ct')";
                mysqli_query($conn, $sql);        
                header("Location: index.php?signup=success"); 
            }

?>