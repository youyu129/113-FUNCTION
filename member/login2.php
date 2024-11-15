<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: start;
            height: 100vh;
            margin: 0;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            margin-top:20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            display: block;
            margin:auto;
            padding: 10px 20px;
            background-color: #0072E3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .home {
            text-align: center;
        }
    </style>
</head>
<body>
<?php

if(isset($_GET['err'])){
    echo "<h3 style='color:red;text-align:center'>帳號或密碼錯誤</h3>";
}


if(!isset($_COOKIE['login'])){
?>
    <div class="login-container">
        <h2>登入</h2>
        <form action="check_acc2.php" method="post">
            <input type="text" name="acc" placeholder="使用者名稱" required>
            <input type="password" name="pw" placeholder="密碼" required>
            <input type="submit" value="登入">
        </form>
    </div>

    <?php
}else{
?>
        <div>
            你已登入
        </div>
<?php
}
?>
    <div class="home">
        <a href="index.html">回首頁</a>
    </div>
</body>
</html>