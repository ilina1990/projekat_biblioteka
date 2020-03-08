<?php
    $id_book_edit=$_GET['id_book_edit'];
    
    include('base.php');

    $sql="SELECT * FROM books LEFT JOIN users ON books.korisnik_id=users.user_id
                              LEFT JOIN `status` ON books.status_info=`status`.status_id
                              WHERE book_id='{$id_book_edit}'";
    $result=$mysqli->query($sql);

    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $ime=$row['book_name'];
            $autor=$row['autor'];
            $status=$row['status_info'];
        }
    }
?>
<div class="container">
  <h2>Promena statusa</h2>
  <form action="pages/book_edit_end.php" method="POST">
    <div class="form-group" hidden>
      <label for="pwd">User id:</label>
      <input type="text" class="form-control" value="<?=$id_book_edit; ?>"  name="id_book_edit">
    </div>
    <div class="form-group">
      <label for="pwd">Ime knjige:</label>
      <input type="text" class="form-control"  value="<?=$ime; ?>" name="ime" readonly>
    </div>
	<div class="form-group">
      <label for="pwd">Autor knjige:</label>
      <input type="text" class="form-control" value="<?=$autor; ?>" name="autor" readonly>
    </div>
    <div class="form-group">
      <div class="custom-control custom-checkbox">
        <?php include('read_book_status_edit.php'); ?>
        <label class="custom-control-label" for="customCheck">U biblioteci</label>
      </div>
    </div>
    <div id="txtHint">
        <button type="submit" class="btn btn-primary">Snimi</button>
    </div>
  </form>
</div>