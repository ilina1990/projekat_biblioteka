<?php 
    if(isset($_SESSION['rights'])){
        if($_SESSION['rights']<>1){
            echo "<script>
                    window.alert('Nemate prava');
                    window.location.href='?p=main';
                 </script>";
        }
    }
?>