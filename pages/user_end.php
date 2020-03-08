<?php
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $user_name=$_POST['user_name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $rights=$_POST['rights'];
    include('base.php');

    $sql="INSERT INTO `users`
     (`user_id`, `ime`, `prezime`, `user_name`, `pass`, 
     `email`, `privilegija`) VALUES (NULL, '{$ime}',
      '{$prezime}', '{$user_name}', '{$pass}','{$email}', '{$rights}')"; 
    if($mysqli->query($sql)===TRUE){
        echo ("<script>
        window.alert('Uspesan upis');
        window.location.href='..//index.php';
        </script>");
    }else{
        echo "Error: ".$sql."<br>".$mysqli->error;
    }
    $mysqli->close();
?>