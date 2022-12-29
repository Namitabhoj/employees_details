<?php
include "../database/Database.php";
if(isset($connection))
{
    $query = "SELECT * FROM employee";

    if( isset($_GET['department']) && $_GET['department'] != "" && $_GET['Email'] !== ''  && $_GET['employment_status'] != ""){
        $query .= " WHERE department='".$_GET['department']."' AND Email ='".$_GET['Email']."' AND employment_status ='".$_GET['employment_status']."'" ;
    }elseif(isset($_GET['Email']) && $_GET['department'] !== "" && $_GET['Email'] !== '' && $_GET['employment_status'] === ""){
        $query .= " WHERE department='".$_GET['department']."' AND Email ='".$_GET['Email']."'";
    }elseif( isset($_GET['department']) && $_GET['department'] !== "" && $_GET['Email'] === '' && $_GET['employment_status'] !== ""){
        $query .= " WHERE department='".$_GET['department']."' AND employment_status ='".$_GET['employment_status']."'";
    }elseif(isset($_GET['department']) &&  $_GET['department'] === "" && $_GET['Email'] !== '' && $_GET['employment_status'] !== ""){
        $query .= " WHERE Email='".$_GET['Email']."' AND employment_status ='".$_GET['employment_status']."'";
    }elseif(isset($_GET['department']) &&  $_GET['department'] !== "" && $_GET['Email'] === '' && $_GET['employment_status'] === ""){
        $query .= " WHERE department='".$_GET['department']."'";
    }elseif( isset($_GET['department']) &&  $_GET['department'] === "" && $_GET['Email'] !== '' && $_GET['employment_status'] === ""){
        $query .= " WHERE Email='".$_GET['Email']."'";
    }elseif(isset($_GET['department']) &&  $_GET['department'] === "" && $_GET['Email'] === '' && $_GET['employment_status'] !== ""){
        $query .= " WHERE employment_status='".$_GET['employment_status']."'";
    }    elseif(isset($_GET['department']) &&  $_GET['department'] === "" && $_GET['Email'] === '' && $_GET['employment_status'] === ""){
        $query = "SELECT * FROM employee";
    }
    
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //print_r($stmt->fetchAll());
}
?>