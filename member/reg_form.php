<?php
// 檢查用
// if(isset($_POST['acc'])){
//     print_r($_POST);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <style>
        body {
            background-color: #f1efef;
        }

        h1 {
            /* tac => text-align: center */
            text-align: center;
        }

        form {
            width: 400px;
            height: 250px;
            border: 1px solid #ccc;
            background-color: white;
            margin: 20px auto;
            border-radius: 10px;
            padding: 20px;
        }

        form div {
            margin: 5px 0;
        }

        form div:nth-child(5) {
            text-align: center;
        }

        form label {
            display: inline-block;
            width: 80px;
            font-size: 18px;
            text-align-last: justify;
        }

        form input[type=text],
        form input[type=password],
        form input[type=date],
        form input[type=number] {
            padding: 5px;
            font-size: 20px;
            border: 0px;
            border-bottom: 1px solid #ccc;
            background-color: white;
        }

        form input[type=submit],
        form input[type=reset] {
            padding: 5px 10px;
            font-size: 18px;
            background-color: rgb(247, 221, 216);
            border: 1px solid #eee;
            border-radius: 5px;
            margin: 30px 10px;
            cursor: pointer;
            box-shadow: 0 0 2px rgba(117, 110, 106, 0.5);
        }

        form input[type=submit]:hover,
        form input[type=reset]:hover {
            padding: 7px 12px;
        }

        form input[type=reset] {
            background-color: rgb(247, 228, 199);
        }
        .home {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['status'])){
        if ($_GET['status']==1){
            echo "註冊成功";
        }else{
            echo "註冊失敗";
        }
    }
    ?>
    
    <h1>會員註冊</h1>

    <!-- form也可以傳給自己 但因為cookie有時候有些地方會出問題 -->
    <!-- <form action="?" method="post"> -->

    <!-- 傳到別的表單 推薦到apis再回來-->
    <!-- emmet 打法 form:post>(label+input:text)*4+div>input:submit+input:reset -->
    <form action="reg.php" method="post">
        <div>
            <label for="">帳號</label>：
            <input type="text" name="acc" id="">
        </div>
        <div>
            <label for="">密碼</label>：
            <input type="password" name="pw" id="">
        </div>
        <div>
            <label for="">電子郵件</label>：
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="">電話</label>：
            <input type="text" name="tel" id="">
        </div>
        <div>
            <input type="submit" value="註冊">
            <input type="reset" name="" id="" value="重置">
        </div>
        <div>

        </div>
    </form>
    <div class="home">
        <a href="index.html">回首頁</a>
    </div>
</body>

</html>