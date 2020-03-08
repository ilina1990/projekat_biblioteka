<?php
    $ime=$_POST['ime'];
    $autor=$_POST['autor'];

    include('base.php');

    $sql="INSERT INTO `books`
     (`book_id`, `book_name`, `autor`, `korisnik_id`,`status_info`) VALUES (NULL, '{$ime}',
      '{$autor}',NULL, 1)";
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