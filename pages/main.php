<?php 

    include('base.php');
    $sql="SELECT * FROM books";
    $result=$mysqli->query($sql);
?>
<div class="row">
    <div class="column">
        <div class="card">
        <h3>Dostupne knjige</h3><br>
<?php
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            if($row['status_info']==1){
            echo '<p>'.$row['book_name'].', <i>'.$row['autor'].'</i></p>';
            }
        }
    }
?>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Pozajmljene knjige</h3><br>
<?php
$conn="SELECT * FROM books LEFT JOIN users ON books.korisnik_id=users.user_id";
$result_1=$mysqli->query($conn);
    if($result_1->num_rows > 0){
        while($row=$result_1->fetch_assoc()){
            if($row['status_info']==2){
            echo '<p>'.$row['book_name'].', <i>'.$row['autor'].'</i>, (kod: '.$row['ime'].' '.$row['prezime'].')</p>';
            }
        }
    }
?>
    </div>
  </div>
</div>