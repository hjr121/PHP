<?php 
include("setting.inc")
?>
<!DOCTYPE html>
<html>
    <meta charset="utf8">
    <h1>Reviewer您好，歡迎進入論文評論網頁</h1>
    <form action="showreviewer.php" method="get">
        論文評委決定:
        <input type="radio" name="decide" value="accept" >Accept
        <input type="radio" name="decide" value="minor revison">Minor Revison
        <input type="radio" name="decide" value="Reject">Reject<br>
        
        論文評論評語:<br>
        <textarea  rows="20" cols="50" name="comment"></textarea>
        <br>
        <input type="submit">
    </form>
    <a href="logout.php"><button type="button">登出</button></a>
    
</html>
</html>

<?php
    if($_SESSION["check"]=="reviewer"){
        $_SESSION["check"]="showr";
     }else{
        header("Location:false.php");
     }
?>
<?php 
include("footer.inc")
?>
