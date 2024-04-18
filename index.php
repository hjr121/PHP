<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    </head>
    <body>
        <div>
            <form action="check.php" method="get">
                <h1>高大資管論文投稿系統</h1>
                請選擇你的角色：
                <select name="charater">
                    <option value="Chair">Chair
                    <option value="Reviewer">Reviewer
                    <option value="Author">Author
                </select><br>
                帳號<input type="text" name="accont"><br>
                密碼<input type="password" name="psw"><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
<?php
    $timestamp=time();
    $datetime=date('Y-m-d H:i:s',$timestamp);
    echo $datetime;

    if(isset($_COOKIE["userName"])){
        echo "<br>".$_COOKIE["userName"]."歡迎回來";
    }else{
        echo "<br>welcome";
    }
?>
