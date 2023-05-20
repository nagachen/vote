<h1>投票</h1>
<?php 

$sql="select * from `topics` where `id`='{$_GET['id']}'";
$topic=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$sql_option="select * from `options` where `subject_id`= '{$_GET['id']}'";
$options=$pdo->query($sql_option)->fetchAll(PDO::FETCH_ASSOC);
?>
<h2><?=$topic['subject'];?></h2>
<hr>
<form action="./api/vote.php" method="post">
<ul>
<?php
    foreach($options as $idx=>$opt){
        echo "<li> <input type=radio value='{$opt['id']}' name='desc'>";
        echo "<span>".($idx+1)."</span>";
        echo "<span".$opt['description']."</span>";
        echo "</li>";

    }
?>
</ul>
<div>
    <input type='hidden' name="subject_id" value="<?=$_GET['id'];?>">
    <input type=submit value="投票">
    <input type=button value="取消">

</div>
</form>