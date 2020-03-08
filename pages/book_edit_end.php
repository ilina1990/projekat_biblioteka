<?php
    session_start();
    include('base.php');
    $id_book_edit=$_POST['id_book_edit'];
    $book_name=$_POST['ime'];
    $autor=$_POST['autor'];
    
    if(isset($_POST['status_info'])){
        $status_info=1;
        $sql="UPDATE books SET status_info='{$status_info}', korisnik_id=NULL WHERE book_id='{$id_book_edit}'";
    }else{
        $status_info=2;
        $korisnik_id=$_SESSION['user_id'];
        $sql="UPDATE books SET status_info='{$status_info}', korisnik_id='{$korisnik_id}' WHERE book_id='{$id_book_edit}'";
    }

    if($mysqli->query($sql)===TRUE){
        echo "<script>
        window.alert('Uspesan upis');
        window.location.href='..//index.php';
        </script>";
    }else{
        echo "Error: ".$sql."<br>".$mysqli->error;
    }
    $mysqli->close();
?>