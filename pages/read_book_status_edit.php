<?php
    $book_id=$_GET['id_book_edit'];
    $korisnik_id=$_SESSION['user_id'];
    include('base.php');
    $sql="SELECT * FROM books LEFT JOIN `status` ON books.status_info=status_id 
                              LEFT JOIN users ON books.korisnik_id=users.user_id
                              WHERE book_id='{$book_id}'";
    $result=$mysqli->query($sql);

    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            if($row['status_info']==1){
                $che='checked';
            }else{
                $che='';
            }
            if($row['korisnik_id']==$korisnik_id or $row['korisnik_id']==NULL){
                $ro='';
            }else{
                $ro='disabled';
            }
           echo '<input type="checkbox" class="custom-control-input" id="customCheck" name="status_info"'.$che.' '.$ro.'>';
        }
    }
?>