<?php
$conn = mysqli_connect('localhost', 'root', '', 'mcet');
$sql = "SELECT * FROM students";
$data = mysqli_query($conn, $sql);

if (isset($_GET['delete_id'])) {
    $id =  $_GET['delete_id'];
    $delete_sql = "DELETE FROM students WHERE id = $id";
    mysqli_query($conn, $delete_sql);
    // header('location: read.php');
}



?>




<table border="1" cellpadding="10">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Roll</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($rows = mysqli_fetch_assoc($data)) {
            echo '<tr>';
            echo '<td>' . $rows['id']  . '</td>';
            echo '<td>' . $rows['name']  . '</td>';
            echo '<td>' . $rows['roll']  . '</td>';
            echo '<td>
                <a href="?edit_id=' . $rows['id'] . '">Edit</a>
                <a href="?delete_id=' . $rows['id'] . '">Delete</a>
            </td>';
            echo '</tr>';
            // echo $rows['id'] . ' ' . $rows['name'] . ' ' . $rows['roll'] . '<br>';
        }
        ?>
    </tbody>
</table>
