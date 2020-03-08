<?php 
    include('admin_rights.php');
    include('base.php');
    $sql="SELECT * FROM users LEFT JOIN rights ON users.privilegija=id_rights ORDER BY users.ime,users.prezime";
    $result=$mysqli->query($sql);
?>
<div class="container">
    <h2>Spisak korisnika</h2>
    <table class="table">
    <thead>
        <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Email</th>
        <th>Uloga</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $korisnik=$row['user_id'];
                echo '<tr>';
                echo '<td>'.$row['ime'].'</td>';
                echo '<td>'.$row['prezime'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td><!-- <a href="?p=user_edit&id_user_edit='.$korisnik.'"> --> '.$row['rights_name'].'</td>';
                echo '</tr>';
            }
        }
    ?>    
    </tbody>
    </table>
</div>