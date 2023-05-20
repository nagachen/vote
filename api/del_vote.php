<?php
include_once "../db.php";

$sql="delete from `topics` where `id`='{$_GET['id']}'";
$subject_sql="delete from `options` where `subject_id`='{$_GET['id']}'";



$pdo->exec($sql);
$pdo->exec($subject_sql);

header("location:../backend.php");
?>

