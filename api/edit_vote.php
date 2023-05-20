<?php
include_once "../db.php";
$sql="UPDATE `topics` SET 
`subject`='{$_POST['subject']}',`open_time`='{$_POST['open_time']}',`close_time`='{$_POST['close_time']}',`type`='{$_POST['type']}' 
WHERE `id`='{$_POST['subject_id']}'";

$pdo->exec($sql);
?>