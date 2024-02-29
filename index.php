<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];

    $conn = mysqli_connect('localhost', 'root', '', 'mcet');
    $sql = "INSERT INTO students (name, roll) VALUES ('$name', $roll)";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'inserted';
    }
}
?>


<form action="" method="post">

    <label for="">Name</label>
    <input type="text" name="name"> <br><br>

    <label for="">Roll</label>
    <input type="text" name="roll"> <br><br>

    <input type="submit" value="Submit" name="submit">

</form>
