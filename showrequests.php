<?php

include_once 'databaseconnection.php';

$username = $_SESSION['username'];

$sql = "SELECT * from requests where username = '$username'";
$records = $conn-> query($sql);

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['trash']; ?></td>
    <td><?php echo $data['bags']; ?></td>
    <td><?php echo $data['event_dt']; ?></td>
  </tr>	
<?php
}
?>
}

?>