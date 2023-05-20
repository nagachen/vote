<?php
include_once "../db.php";
$sql="UPDATE `topics` SET 
`subject`='{$_POST['subject']}',`open_time`='{$_POST['open_time']}',`close_time`='{$_POST['close_time']}',`type`='{$_POST['type']}' 
WHERE `id`='{$_POST['subject_id']}'";

$pdo->exec($sql);

//將option資料表撈出來
$opt_sql="select * from `options` where `subject_id`= '{$_POST['subject_id']}'";
$options=$pdo->query($opt_sql)->fetchAll(PDO::FETCH_ASSOC);
//

//處理 options 更動的判定,先刪除
//判斷$options是否為空？
if(!empty($options)){

//判斷$_POST['opt_id'])是否存在？
    if(isset($_POST['opt_id'])){
        //將options內資料一個個和$_POST['opt']內比對
            foreach($options as $opt){
                if(!in_array($opt['id'],$_POST['opt_id'])){
                    //不在裡面則刪除
                  
                    $pdo->exec("delete from `options` where `id`= '{$opt['id']}'");
                }
            }
    }else{
       //若$_POST不存在則全部刪除
        $pdo->exec("delete from `options` where `subject_id`= '{$_POST['subject_id']}'");
    }
}

//處理update情況
  if(isset($_POST['opt_id'])){
      foreach($_POST['opt_id'] as $idx=>$id){
          $sql= "UPDATE `options` SET `description`='{$_POST['description'][$idx]}' 
          WHERE `id`=$id";
          $pdo->exec($sql);
          //可以先將$_POST['description'][$idx]從記憶體消除
          unset($_POST['description'][$idx]);
  }
  }else{
 //     //處理$_POST['opt_id']不存在，description 需要新增的情況
     if(isset($_POST['description'])){
        foreach($_POST['description'] as $idx=>$desc){
            $sql= "INSERT INTO `options`(`description`,`subject_id`) VALUES
                                ('{$desc}','{$_POST['subject_id']}')";
            $pdo->exec($sql);
 }
}
}
 
header("location:../backend.php");

// echo "<pre>";
// echo"資料庫內的options<br>";
// print_r($options);
// echo "</pre>";
// echo "<pre>";
// echo"表單的_POST['description']<br>";
// print_r($_POST['description']);
// echo "</pre>";
// echo "<pre>";
// echo"動過的_POST['opt_id<br>";
// print_r($_POST['opt_id']);
// echo "<pre>";
?>