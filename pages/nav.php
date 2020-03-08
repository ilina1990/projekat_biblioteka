<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Biblioteka</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?p=main">Home</a></li>
    </ul>
    <?php

      if(isset($_SESSION['user'])){
        if(isset($_SESSION['rights'])){
          if($_SESSION['rights']==1){
            echo '<ul class="nav navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Spisak korisnika
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="?p=user_list">Spisak korisnika</a>
                <a class="dropdown-item" href="?p=user">Dodaj novog korisnika</a>
              </div>
              </li>
            </ul>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="?p=book">Dodaj novu knjigu</a></li>
                  </ul>';
          }
        }
        echo '<ul class="nav navbar-nav">
          <li class="active"><a href="?p=book_list">Spisak knjiga</a></li>
        </ul>
        <ul class="nav navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    '.$_SESSION['user_print'].'
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="?p=logout">Logout</a>
                    </div>
                    </li>
                  </ul>';
      }else{
        echo '<ul class="nav navbar-nav">
        <li class="active"><a href="?p=login">Logovanje</a></li>
        </ul>';
      }
    ?>
    <!-- <form class="navbar-form navbar-left" action="#">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Pretrazi</button>
    </form> -->
  </div>
</nav>
