<?php 
include_once "../db.php";

 $sql="insert into `topics`(`subject`,`open_time`,`close_time`,`type`)
 values('{$_POST['subject']}','{$_POST['open_time']}','{$_POST['close_time']}','{$_POST['type']}')";
$pdo->exec($sql);

header("location:../back/add_vote.php");
?> 
