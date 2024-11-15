<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'courier new';
        }
        h3 {
            text-align: center;
        }

    </style>
</head>
<body>
    <div>
<!-- <h3>用form表單</h3> -->
<!-- <form action="?">
    <input type="number" name="line" id="">
    <button type="submit">submit</button>
</form>
<?php

$line = (isset($_GET['line']))?$_GET['line']:5;

for($i=0;$i<$line;$i++){

for($k=0;$k<($line-1-$i);$k++){
echo "&nbsp";
}

for($j=0;$j<(2*$i+1);$j++){
    echo "*";
}
echo "<br>";
}    
?> -->
</div>

<div>
<h3>用function</h3>

<?php

$line = (isset($_GET['line']))?$_GET['line']:5;


function starts($shape,$line){
    switch($shape){
        case "正三角形":
            for($i=0;$i<$line;$i++){
            
                for($k=0;$k<($line-1-$i);$k++){
                echo "&nbsp";
                }

                for($j=0;$j<(2*$i+1);$j++){
                    echo "*";
                }
                echo "<br>";
                }
        break;
        case "菱形":
            for($i=0;$i<$line;$i++){
                if($i>floor($line/2)){
                    $k1=$i-(floor($line/2));
                    $j1=2*($i-(2*($i-(floor($line/2)))))+1;
                }else{
                    $k1=(floor($line/2))-$i;
                    $j1=(2*$i+1);
                }
            
                for($k=0;$k<$k1;$k++){
                    echo "&nbsp;";
                }
            
                for($j=0;$j<$j1;$j++){
                    echo "*";
                }
                echo "<br>";
            
            }
            break;  
        }
        }
function all($table){
    // 連線資料庫
    $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from $table";
    // 判斷是否有該資料表
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    // return整個資料表的資料
    return $rows;
}



?>
</div>
</body>
</html>