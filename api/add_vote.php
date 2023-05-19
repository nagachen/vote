<?php 
include_once "../db.php";

 
//拿取topics內的id和subject和所傳來的POST[subject]比對是否重覆
//主題不重覆,希望回傳值為單一數值所以用count
$chk_sql="select count(*) from `topics` where `subject`='{$_POST['subject']}'";
//fectchColumn()可以和count塔配傳回單一值
$chk=$pdo->query($chk_sql)->fetchColumn();
// echo "<pre>";
// print_r($chk);
// echo "<pre>";
if($chk>0){
    echo "此主題已被使用過,請修改主題內容";
    echo "<a href='../back/add_vote.php'>返回新增主題</a>";
}else{
    //寫入
    $sql="insert into `topics`(`subject`,`open_time`,`close_time`,`type`)
 values('{$_POST['subject']}','{$_POST['open_time']}','{$_POST['close_time']}','{$_POST['type']}')";
 $pdo->exec($sql);
}
//顯示寫入或沒寫入的id
$sql_subject_id="select `id` from `topics` where `subject`='{$_POST['subject']}'";
echo $sql_subject_id;
$subject_id=$pdo->query($sql_subject_id)->fetchColumn();

echo $subject_id;
 

// header("location:../back/add_vote.php");
?> 
