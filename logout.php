<?php
    include("setting.inc")
?>
<meta charset="utf8">
<?php
    header("Refresh:3,url=index.php");
    echo "登出成功,3秒後跳轉";
    session_destroy();
    
?>
<?php
    include("footer.inc")
?>
