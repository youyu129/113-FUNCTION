<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');
$class_id=$GET['id'];
$class_sql="select * from classes where id ='$class_id'";
$class=$pdo->query($class_sql)->fetch(PDO::FETCH_ASSOC);
$class['code'];
print_r($class);
echo $class_sql 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$class['name'];?>詳細資料</title>
</head>
<body>
    <h1><?=$class;?>班級學員</h1>
    <h2>班級導師<?=$class['tutor'];?></h2>
    <?php
    $class_members="select school_num,seat_num from class_student where class_code='";
    $members;
    ?>
    <table>
        <tr>
            <td>座號</td>
            <td>學號</td>
            <td>姓名</td>
        </tr>
        <tr>
            <td>座號</td>
            <td>學號</td>
            <td>姓名</td>
        </tr>

    <?php
    foreach($members as $idx => $mem){
        $stu

    }
    ?>
    </table>
</body>
</html>