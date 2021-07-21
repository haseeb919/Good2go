<?php

include_once 'databaseconnection.php';

$sql = "SELECT * from requests";
$records = $conn-> query($sql);

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['apartment']; ?></td>
    <td><?php echo $data['password']; ?></td>
  </tr>	
<?php
}
?>
}

?>