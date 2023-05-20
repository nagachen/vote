<?php include_once "db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理後台</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <a href="index.php">首頁</a>
        <a href="login.php">登出</a>
        <nav>
            <a href='./backend.php?do=add_vote'>新增投票</a>

            <a href='./backend.php?do=query_vote'>結果查詢</a>
        </nav>
    </header>
    <main>
        
    <?php
    //使用三元運算式 切換所要去的網頁
    //$file=(isset($_GET['do']))? "./back/".$_GET['do']:"./back/topiclist";
    //或
    // $do=(isset($_GET['do']))?$_GET['do']:'topiclist';
    // 可以改成
    $do=$_GET['do']??'topiclist.php';

    $file='./back/'.$do.".php";
    include (file_exists($file))?$file:'./back/topiclist.php';
    // //使用if else 切換所要去的網頁
    // if(isset($_GET['do'])){
    //     $file= "./back/".$_GET['do'].".php";
    // }else{
    //     $file= "./back/topiclist.php";
    // }
    // if(file_exists($file)){
    //     include $file;
    // }else{
    //     include "./back/topiclist.php";
    // }
    
    // //使用swtich 切換所要去的網頁
    // switch($_GET['do']){
    //     case 'add_vote.php':
    //         include "./back/add_vote.php";
    //         break;
    //     case 'query_vote.php':
    //         include "./back/query_vote.php";
    //         break;
    //     default:
    //         include "./back/topiclist.php";
    // }    
     
    ?>
    </main>
    <footer></footer>
</body>

</html>