<?php



try{
    $db = new PDO('mysql:host=localhost;dbname=adminpanel;charset=utf8','root','');


}

catch(Exception $e){
    echo $e->getMessage();

    echo "An error has occurred";
}



?>