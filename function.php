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
    
/*
* 很多的native會集合成function
* 很多的function會集合成class
* 很多的class會集合成函式庫library/框架frame
* vanilla 香草(原味/原生) 香草框架就是沒有框架
*/

/*
* 建立資料庫的連線變數
* @param string $db 資料庫名稱
* @return object
*/
function pdo($db){
    $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
    $pdo=new PDO($dsn,'root','');
    return $pdo;
}


/*
* 回傳指定資料表的所有資料
* @param string $table 資料表名稱
* @return array
*/
function all($table){
    // 連線資料庫
    $pdo=pdo('crud');
    $sql="select * from $table";
    // 判斷是否有該資料表
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    // return整個資料表的資料
    return $rows;
}

/*
* 回傳指定資料表的特定ID的單筆資料
* @param string $table 資料表名稱
* @param integer $id || array $id 資料表ID
* @return array
*/
function find($table,$id){
    if(is_array($id)){
        $tmp=[];
        foreach($id as $key => $value){
            // string print format
            // %s = 字串
            // sprintf("`%s`=`%s`",$key,$value)
            
            //$key要是字串，如果是數字會變成錯誤
            $tmp[]="`$key`='$value'";
        }

    }else{
        // 連線資料庫
        $pdo=pdo('crud');
        $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    $sql="select * from $table where id='$id'";

    // return整個資料表的資料
    return $rows;
}

/*
* 列出陣列內容
*/
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>
</div>
</body>
</html>