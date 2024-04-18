<?php
    include("setting.inc")
?>
<meta charset="utf8">
<?php
    $dic=$_GET["decide"];
    $com=$_GET["comment"];
   
    if($_SESSION["check"]=="showr"){
        echo "論文評委決定:".$dic."<br>";
        echo "論文評委評語:"."<br>".nl2br($com);
    }else{
        header("Location:false.php");
    }

?>
<html>
    <br>
    <a href="logout.php"><button type="button">登出</button></a>
</html>