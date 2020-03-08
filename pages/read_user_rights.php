<?php 
    include('base.php');
    $sql="SELECT * FROM rights";
    $user_rights_sql=$mysqli->query($sql);

    if($user_rights_sql->num_rows > 0){
        while($row=$user_rights_sql->fetch_assoc()){
           if($row['id_rights']==2){
               $sel='selected';
           }else{
               $sel='';
           }
           echo '<option value="'.$row['id_rights'].'"'.$sel.'>'.$row['rights_name'].'</option>';
        }
    }
?>