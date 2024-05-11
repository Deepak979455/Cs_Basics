<?php
include "../common/db.php";
//var_dump($_POST);
//exit();
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $_POST["salt"]=uniqid();
    $_POST["password"]=md5(trim($_POST['password']).$_POST["salt"]);
    $stm = $conn->prepare('select email from users where email=?');
    $stm->execute(array($_POST["email"]));
    if ($stm->rowCount()==0){
    
        $stmt = $conn->prepare('insert into users (first_name, last_name, email, password, salt) values(?,?,?,?,?)');
        $stmt->execute(array($_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["password"],$_POST["salt"])); 
        header("location:../login.php");
        exit();
    }else{
        header("location:../login.php?error=Email already exits");

    }

}else{
    header("location:../login.php?error");
    exit();
}


?>