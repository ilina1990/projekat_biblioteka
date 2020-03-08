<?php
  include('admin_rights.php');
?>
<div class="container">
  <h2>Nove knjige</h2>
  <form action="pages/book_end.php" method="POST"> 
	<div class="form-group">
      <label for="pwd">Ime knjige:</label>
      <input type="text" class="form-control"  placeholder="Unesi ime knjige" name="ime" required>
  </div>
	<div class="form-group">
      <label for="pwd">Autor:</label>
      <input type="text" class="form-control"  placeholder="Unesi autora" name="autor" required>
    </div>
    <div id="txtHint">
        <button type="submit" class="btn btn-primary">Snimi</button>
    </div>
  </form>
</div>
