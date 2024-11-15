<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin:auto;
        }
        table tr:first-child {
            background-color: lightgray;
            color:brown;
            text-shadow:;
        }
        tr,
        td {
            height: 30px;
            border: 1px solid black;
            padding: 5px 15px;
            text-align:center;
        }
    </style>
</head>

<body>
    <h1>資料庫連線</h1>
    <table>
    <tr>
        <td>序號</td></td><td>班級名稱</td><td>班導師</td>
    </tr>
        <?php
    // $dsn通常都用這個變數
    // dbname資料庫名稱
    // port 資料庫用3306 web用80 可以不用寫
    // charset=utf8 編碼方式
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    // 帳號密碼
    $pdo=new PDO($dsn,'root','');

    $sql="select * from classes";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td>
                <a href="classes_detail.php?id=<?=$row['id'];?>">
                <?=$row['name'];?>
                </a>
            </td>
            <td><?=$row['tutor']?></td>
        </tr>
    <?php
    }
    ?>

    </table>
</body>

</html>