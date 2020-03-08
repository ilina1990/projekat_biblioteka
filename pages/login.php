<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="?p=login_end" method="POST"> 
    <div class="form-group">
      <label for="pwd">Korisnicko ime:</label>
      <input type="text" class="form-control" placeholder="Unesi korisnicko ime" name="user" required>
      <label for="pwd">Lozinka:</label>
      <input type="password" class="form-control" placeholder="Unesi lozinku" name="pass" required>
      <div id="txtHint">
        <button type="submit" name="submit" class="btn btn-primary">Prijavi se</button>
      </div>
    </div>  
    </form>
</body>
</html>