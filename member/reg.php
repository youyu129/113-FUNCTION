<!-- 處理檔案用的，不需要html碼 -->

<?php

// 測試用
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$dsn="mysql:host=localhost;charset=utf8;dbname=crud";
$pdo=new PDO ($dsn,'root','');

// 一般不會直接把POST丟進去
// 會先設定變數來代表
// 再處理之後才會使用 (例如去除前後空白)
$sql="insert into `member`(`acc`,`pw`,`email`,`tel`) 
                    values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['tel']}')";

// $pdo->exec($sql);

if($pdo->exec($sql)){
    header("location:reg_form.php?status=1");
}else{
    header("location:reg_form.php?status=0");
}

?>