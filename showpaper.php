<?php
    include("setting.inc")
?>
<meta charset="utf8">
<?php
    $t=$_GET["title"];
    $m=$_GET["mail"];
    $n=$_GET["aname"];
    $com=$_GET["comment"];
   
    if($_SESSION["check"]=="showp"){
        echo "論文標題：".$t."<br>";
        echo "作者姓名：".$m."<br>";
        echo "作者email：".$n."<br>";
        echo "論文摘要:"."<br>".nl2br($com);
    }else{
        header("Location:false.php");
    
    }

?>
<html>
    <br>
    <a href="logout.php"><button type="button">登出</button></a>
</html>