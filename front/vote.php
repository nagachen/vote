<h1>投票</h1>
<?php 

$sql="select * from `topics` where `id`='{$_GET['id']}'";
$topic=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<h2><?=$topic['subject'];?></h2>