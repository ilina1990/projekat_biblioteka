<?php
  include('admin_rights.php');
?>
<div class="container">
  <h2>Pregled korisnika</h2>
  <form action="pages/user_end.php" method="POST">
	<div class="form-group">
      <label for="pwd">Ime:</label>
      <input type="text" class="form-control"  placeholder="Unesi ime" name="ime" required>
  </div>
	<div class="form-group">
      <label for="pwd">Prezime:</label>
      <input type="text" class="form-control"  placeholder="Unesi prezime" name="prezime" required>
    </div>
	<div class="form-group">
      <label for="pwd">Korisnicko ime:</label>
      <input type="text" class="form-control"  name="user_name"   required>
      
    </div>
	 <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pass" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Unesi email" name="email" required>
    </div>
    <div class="form-group">
      <label>Korisnička prava:</label>
      <select name="rights" class="form-control">
        <?php include('read_user_rights.php'); ?>
      </select>
    </div>
    <div id="txtHint">
        <button type="submit" class="btn btn-primary">Snimi</button>
    </div>
  </form>
</div>