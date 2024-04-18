<?php 
include("setting.inc")
?>
<?php
    if($_SESSION["check"]=="chair"){
        echo "";
    }else{
        header("Location:false.php");
    
     }
?>


<!DOCTYPE html>
<html>
    <meta charset="utf8">
    <h1>Reviewer您好，歡迎進入Chair網頁</h1>
    <a href="logout.php"><button type="button">登出</button></a>
    
</html>
</html>

<?php 
include("footer.inc")
?>