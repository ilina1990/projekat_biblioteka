<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    include('base.php');
    $sql="SELECT * FROM books LEFT JOIN `status` ON books.status_info=status_id ORDER BY books.status_info, books.autor, books.book_name";
    $result=$mysqli->query($sql);
?>
<div class="container">
    <h2>Spisak knjiga</h2>
    <table class="table">
    <thead>
        <tr>
        <th>Ime</th>
        <th>Autor</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $book_id=$row['book_id'];
                $status_name=$row['status_name'];
                echo '<tr>';
                echo '<td>'.$row['book_name'].'</td>';
                echo '<td>'.$row['autor'].'</td>';
                echo '<td><a href="?p=book_edit&id_book_edit='.$book_id.'">'.$status_name.'</a></td>';
            }
        }
    ?> 
    </tbody>
    </table>
</div>
    
</body>
</html>