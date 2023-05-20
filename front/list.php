<?php

$sql="select * from `topics`";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    ?>
    <li><?=$row['subject'];?></li>
<?php
}
?>
