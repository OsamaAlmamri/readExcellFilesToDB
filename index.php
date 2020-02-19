<?php
session_start();
include "app/header.php";
include "app/db.php" ;


if ($pdo) {
//    var_dump( $xlsx->rows());
    $sql = "select * from  student ";
        $result = $pdo->query($sql); ?>
<table>
    <thead>
    <th width="20%"> id</th>
    <th width="20%"> name</th>
    <th width="20%"> phone</th>
    <th width="20%"> majord</th>
    </thead>
    <tbody>
<?php  foreach ($result as  $key => $row) { ?>
    <tr>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row[4] ?></td>
    </tr>
    <?php }?>
    </tbody>

    </table>



<?php }?>