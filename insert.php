<?php
include('database.php');

$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$images = $_POST['images'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$date_achat = $_POST['date_achat'];
$date_de_publication = $_POST['date_de_publication'];




/*$sql = "INSERT INTO livres (titre, auteur, images, prix, quantite, date_achat, date_de_publication)
VALUES ('$titre', '$auteur', '$images','$prix', '$quantite' , '$date_achat','$date_de_publication')";*/
 
// use exec() because no results are returned
// $conn->exec($sql);
try {
    $sql = "INSERT INTO livres (titre, auteur, images, prix, quantite, date_achat, date_de_publication)
    VALUES ('".$titre."','".$auteur."','".$images."','".$prix."','".$quantite."','".$date_achat."','" .$date_de_publication."')";
    mysqli_query($conn,$sql);
        echo ' <div style="padding: 20px ; background-color : lightgreen ; text-align : center ; ">a record added sucessfully <br>
        <a href="read.php"><button style"display : inline-block; padding : 10px ; outline :none ; border :none ;">OK</button></a></div>
        ';

} catch (\Throwable $th) {
    echo $th;
}

// if(mysqli_query($conn,$sql)){
//     echo ' <div style="padding: 20px ; background-color : lightgreen ; text-align : center ; ">a record added sucessfully <br>
//              <a href="read.php"><button style"display : inline-block; padding : 10px ; outline :none ; border :none ;">OK</button></a></div>
//     ';
// }else{
//     echo 'error '. $sql ; 
// };

//header("location: read.php");
?>