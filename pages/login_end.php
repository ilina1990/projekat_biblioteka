<?php 
    if(isset($_POST['submit'])){
        require_once('base.php');
    }

    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $resalt=$mysqli->query("SELECT * FROM users");

    if($resalt->num_rows > 0){
        while($row=$resalt->fetch_assoc()){
            if($user==$row['user_name']){
                if($pass==$row['pass']){
                    $_SESSION['user_id']=$row['user_id'];
                    $_SESSION['user']=$row['user_name'];
                    $_SESSION['user_print']=$row['ime'].' '.$row['prezime'];
                    $_SESSION['rights']=$row['privilegija'];

                    echo '<script>
                        window.location.href="index.php";
                        </script>';
                }else{
                    echo 'Neispravan unos!';
                }
            }else{
                    echo 'Neispravan unos!';
            }
        
        }
    }
?>