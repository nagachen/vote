
<?php include_once "./db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>不合格投票所</title>
</head>
<body>
<header>
    <a href="index.php">首頁</a>
    <a href="./?do=result">結果</a>
    <a href="./?do=login">登入</a>
    <a href="./?do=reg">註冊</a>
</header>
<main>
<?php 
// include "./front/list.php";
$do=$_GET['do']??'list';
$file='./front/'.$do.'.php';
include (file_exists($file))?$file:'./front/list.php'
?>
</main>
<footer></footer>
</body>
</html>