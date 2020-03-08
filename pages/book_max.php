<?php
    include('base.php');
    $sql="SELECT * FROM books LEFT JOIN users ON books.korisnik_id=users.user_id";
    $result=$mysqli->query($sql);
    $n=0;
    $korisnik_id=$_SESSION['user_id'];
    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
            if($row['korisnik_id']==$korisnik_id){
                $n++;
            }
        }
    }
    if($n > 2){
        echo "<script>
        window.alert('Nemate prava! Molim Vas prvo vratite uzete knjige!');
        window.location.href='?p=main';
        </script>";
    }
?>