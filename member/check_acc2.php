<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
    $pdo=new PDO ($dsn,'root','');

    if (!isset($_POST['acc'])){
        header("location:login2.php");
        exit();
    }

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    
    // 全部欄位都撈
    // $sql="select * from `member` where `acc`='$acc' && `pw`='$pw'";
    
    // 只撈一欄
    $sql="select count(id) from `member` where `acc`='$acc' && `pw`='$pw'";
    
    // 取回的是陣列
    // $row=$pdo->query($sql)->(PDO::FETCH_ASSOC);
    
    // 取回的只有 1
    $row=$pdo->query($sql)->fetchColumn();

    // 用來檢查
    // echo"<pre>";
    // print_r($row);
    // echo"</pre>";

    $pdo->query($sql);

    // if($acc==$row['acc'] && $pw==$row['pw']){
    if($row>=1){
        header("location:success.php");
    }else{
        header("location:login2.php?err=1");
        echo"帳密錯誤：登入失敗";
    }
    ?>

</body>
</html> 