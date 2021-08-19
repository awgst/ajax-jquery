<?php
    include('koneksi.php');
    $koneksi = new koneksi('localhost', 'root', '', 'oop_mysql_db');
    $read = $koneksi->read();
    while ($row = mysqli_fetch_array($read)) {
        echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['nim'].'</td>
            <td>'.$row['email'].'</td>
            <td><a href="edit_form.php?id='.$row['id'].'">Edit</a> | <a href="delete.php?id='.$row['id'].'">Delete</a></td>
        </tr>';
    }
?>