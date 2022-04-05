<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "gameBar";
$mysqli = new mysqli($hostname, $username, $password, $database);
$result =  $mysqli->query("SELECT * FROM customerData ORDER BY fees DESC");
if ($result == null) {
    echo $mysqli->error;
    exit;
}
?>

<table border="1" width="50%">
    <tr>
        <th>Serial Number</th>
        <th>GameName</th>
        <th>Friends</th>
        <th>Fees</th>
    </tr>

    <?php
    $length = $result->num_rows;
    for ($i = 0; $i < $length; $i++) {
        $row = $result->fetch_assoc();
    ?>

        <tr>
            <td> <?= $row['Serial']; ?> </td>
            <td> <?= $row['gameName']; ?> </td>
            <td> <?= $row['friends']; ?> </td>
            <td> <?= $row['fees']; ?> </td>
        </tr>

    <?php
    }
    ?>

</table>