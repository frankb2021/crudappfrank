<?php

include "connect.php";


if(isset($_POST['create-submit'])){

$stmt = $db->prepare("INSERT INTO persons (firstname,lastname,birthday) VALUES (:firstname,:lastname,:birthday)");
$stmt->bindValue(':firstname', $_POST['firstname']);
$stmt->bindValue(':lastname', $_POST['lastname']);
$stmt->bindValue(':birthday', $_POST['birthday']);
$stmt->execute();



}

if(isset($_POST['read'])){
    $stmt = $db->query("SELECT firstname,lastname,birthday FROM persons");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->execute();



    foreach($result as $row){

        $firstname = htmlentities($row['firstname']);
        $lastname = htmlentities($row['lastname']);
        $postcode = htmlentities($row['birthday']);

        echo $firstname ."<br>" . $lastname . "<br>" . $postcode . "<br>";
    }
}

?>