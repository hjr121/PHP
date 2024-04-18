<?php 
include("setting.inc")
?>
<!DOCTYPE html>
<html>
    <meta charset="utf8">
    <h1>Author您好，歡迎進入論文投稿網頁</h1>
    <form action="showpaper.php" method="get">
        論文標題:<input type="text" name="title"><br>
        作者姓名:<input type="text" name="aname"><br>
        作者email:<input type="text" name="mail"><br>

        論文摘要:<br>
        <textarea  rows="20" cols="50" name="comment"></textarea>
        <br>
        <input type="submit">
    </form>
    <a href="logout.php"><button type="button">登出</button></a>
    
</html>
</html>
<?php
    if($_SESSION["check"]=="author"){
        $_SESSION["check"]="showp";
     }else{
        header("Location:false.php");
    
     }
?>
<?php 
include("footer.inc")
?>
